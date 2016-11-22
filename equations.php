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


$panelClip->mountHoles->clearanceDiameter = 4.8 * $mm; //fix me
$panelClip->mountHoles->pilotHoleDiameter = 3 * $mm; 
$panelClip->mountHoles->intervalZ = 20 * $mm; //fix me
$panelClip->mountHoles->clampingDiameter = 15 * $mm; //fix me
$panelClip->mountHoles->screwHeadClearanceDiameter = 11 * $mm;
$panelClip->mountHoles->offsetYFromBeam = $panelClip->mountHoles->screwHeadClearanceDiameter / 2 + 2 * $mm;

$panelClip->mountHoles->count = 1 + floor(($panelClip->extentZ - $panelClip->mountHoles->clampingDiameter) / $panelClip->mountHoles->intervalZ);
$panelClip->mountHoles->count = 2 * floor($panelClip->mountHoles->count/2); //ensure that there are an even number of mountHoles (so that the alternating clearnce/threaded pattern will allow the part to be hermaphroditic (although not necessarily symmetrical).)
$panelClip->threadedMountHoles->count = $panelClip->mountHoles->count/2;
$panelClip->mountHoles->spanZ = $panelClip->mountHoles->intervalZ * ($panelClip->mountHoles->count - 1);
$panelClip->threadedMountHoles->interval = 2 * $panelClip->mountHoles->intervalZ;
$panelClip->clearanceMountHoles = clone $panelClip->threadedMountHoles;

$panelClip->threadedMountHoles->diameter = $panelClip->mountHoles->pilotHoleDiameter;
$panelClip->clearanceMountHoles->diameter = $panelClip->mountHoles->clearanceDiameter;

//the following two values should be zero and $panelClip->mountHoles->intervalZ, in either order.  The order determines the chirality of the part (i.e. reversing the order would produce a mirror-image version of the part.)
$panelClip->threadedMountHoles->offset = $panelClip->mountHoles->intervalZ;
$panelClip->clearanceMountHoles->offset = 0;


$panelClip->clearanceMountHoles->screwHeadPocket->diameter = 9.1 * $mm;//$panelClip->mountHoles->screwHeadClearanceDiameter ;
$panelClip->clearanceMountHoles->screwHeadPocket->depth = max([0,$panelClip->b - 1.3 * $mm]); //ensures we always retain at least 1.3mm of material under the screw head


$panelClip->threadedMountHoles->threadMeatBump->diameter = 6.5 * $mm;
$panelClip->threadedMountHoles->threadMeatBump->height = max([0, 4 * $mm - $panelClip->b ]); //ensures we always retain at least 5 * $mm of thread depth.
$panelClip->threadedMountHoles->threadMeatBump->draftAngle = 40 * $degree; //allows us to 3d-print the bump without supports.
// = "externalParameters.this.threadedMountHoles.threadMeatBump.diameter"

//  = "externalParameters.this.extentZ"/2 - "externalParameters.this.mountHoles.spanZ"/2 + "externalParameters.this.threadedMountHoles.offset"
//  = "externalParameters.this.extentZ"/2 - "externalParameters.this.mountHoles.spanZ"/2 + "externalParameters.this.clearanceMountHoles.offset"

//  "clearanceMountHoles_pattern" = iif("externalParameters.this.clearanceMountHoles.count" > 1, "unsuppressed", "suppressed")
//  "threadedMountHoles_pattern" = iif("externalParameters.this.threadedMountHoles.count" > 1, "unsuppressed", "suppressed")

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