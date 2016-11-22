<?php

setParameterSetId("f9ad672f858446fb93f66d7fd988f9d7");

$mm = 1;
$inch = 25.4 * $mm;

$degree = 1;
$radian = 180/pi();



$slotWidth = 10 * $mm; //the width of the opening of the slot.
$tunnelWidth = 20.1 * $mm; //the maximum width of the interior of the tunnel.
$slotVestibuleDepth = 6 * $mm; //the depth of the narrow region of the slot before the slot opens up into the interior tunnel.
$slotDepth = 13 * $mm; //the total depth of the slot from the exterior surface of the beam to the bottom surface of the slot. //the 60x60 profile has slightly shallower slots (13 mm depth) than the 45x45 profile (something like 14.5 mm depth)

$minimumAllowedShoulderOverlapX = 2 * $mm;  //The shoulder of the clip must overlap the shelf of each side of the slot by at least this much.

$panelClip->protrudingExtentY = 20 * $mm; 

$panelClip->extentZ = 40 * $mm; //fix me
$panelClip->a = 4.4 * $mm; 
$panelClip->b = 2.2 * $mm; //fix me
$panelClip->c = 2 * $mm; //fix me
$panelClip->d = 3.8 * $mm; 
$panelClip->e = $slotVestibuleDepth + $panelClip->protrudingExtentY; 
$panelClip->f = 2.2 * $mm; 

$panelClip->mountHoles->offsetYFromBeam = $panelClip->protrudingExtentY / 2 ;
$panelClip->mountHoles->diameter = 4.2 * $mm; //fix me
$panelClip->mountHoles->intervalZ = 20 * $mm; //fix me
$panelClip->mountHoles->clampingDiameter = 15 * $mm; //fix me

$panelClip->mountHoles->count = 1 + floor(($panelClip->extentZ - $panelClip->mountHoles->clampingDiameter) / $panelClip->mountHoles->intervalZ);
$panelClip->mountHoles->spanZ = $panelClip->mountHoles->intervalZ * ($panelClip->mountHoles->count - 1);


$minimumPanelThickness = 
	max([
		2 * $panelClip->c, // this is the condition where the two halves of the clip are pushed together, with the depth stop wings in contact with one another.
		$slotWidth/2 - $panelClip->a + $minimumAllowedShoulderOverlapX  - $panelClip->b // this is the condition where the two halves of the clip are pushed together until the clip halves fail to overlap the lip of the slot by a sufficient amount.
	]);
$maximumPanelThickness = $slotWidth - 2 * $panelClip->b;

//it is important to ensure that
//the following condition is required in order to ensure that, when a panel is slid 
// in to a pair of facing slots that are already assembled, clamped between a pair of 
//clips on the upper slot (seated against the depth stop wings), and left dangling in 
//the lower slot, that the panel will engage by at least $slotDepth/2 in the lower slot. 
//(there is a lot that I am not bothering to spell out in the preceeding explanation.)
if($slotVestibuleDepth + $panelClip->d - $panelClip->f <= $slotDepth/2)
{
	fwrite(STDERR, "freehanging bottom of panel condition satisfied.  This is good.\n");
} else
{
	
	$panelClip->f = $slotVestibuleDepth + $panelClip->d - $slotDepth/2;
	fwrite(STDERR, "freehanging bottom of panel condition not satisfied.  In order to enforce this condition, we have set \$panelClip->f to " . $panelClip->f . ".\n");
}
?>