<?php

setParameterSetId("d9ee68f056f64e63955363b5539c8c88");

$inch = 1;
$mm = 1/25.4;

$degree = 1;
$radian = 180/pi();


//============  LINEAR BEARING SYSTEMS ==============================

//the carriage (the thing that rides along the way), has a wayTargetX_plane and a wayTargetY_plane.  wayTargetX_plane is normal to the way's X axis (when the carrage is properly engaged on the way), likewise for wayTargetY_plane.
// these planes will coincide with the way's wayX_plane and wayY_plane, respectively, when the carriage is properly engaged.  (What matters is that the carriage and ways are defined with the SAME concept of these x and y planes, not the concept itself.)

//the way's mountingSurfaceOffset is the distance between the way's wayY_plane and the surface where the way is mounted to the rest of the assembly.

//likewise, a carriage has a mountingSurfaceOffset, which is the distance between the carriage's wayYTarget_plane and the surface where the carriage mounts to whatever it is carrying.  The carriage mounting surface is assumed to be the wayYMax surface of the carriage (we are assuming carriages witha roughly rectangular cross-section). 


//these numbers are arbitrary
$linearBearingTypesEnum->kent4 = 5;
$linearBearingTypesEnum->kent6 = 6;
$linearBearingTypesEnum->pbc = 11;
$linearBearingTypesEnum->thkHsr20 = 12;
$linearBearingTypesEnum->thkShs25 = 13;


$kent4Way->linearBearingType = $linearBearingTypesEnum->kent4;
$kent4Way->extentX = 4*$inch ; //The 'X' here refers to the x'direction in the way frame.  By convention, the Z axis of a way is the direction of travel of the carriage.  The X direction is aligned along the longer side of the rectangular cross section, and the Y direction is aligned along the shorter side of the rectangular cross section (assuming the way has a roughly rectangular cross-setion with one side longer than the other).  The y axis is directed from the mounting surface towards the way.
$kent4Way->extentY = 0.25 * $inch ;
$kent4Way->mountingSurfaceOffset = $kent4Way->extentY/2;

$kent4Carriage->linearBearingType = $linearBearingTypesEnum->kent4;
$kent4Carriage->mountingSurfaceOffset = 28.78963 * $mm; 
$kent4Carriage->extentZ = 6 * $inch; //this is the extentZ of the 'withPlate' configuration of kentStyleCarriage.
$kent4Carriage->targetWayExtentX = $kent4Way->extentX;
$kent4Carriage->extentX = 5 * $inch; //fix me

$kent6Way = clone $kent4Way;
$kent6Way->linearBearingType = $linearBearingTypesEnum->kent6;
$kent6Way->extentX = 6 * $inch;

$kent6Carriage = clone $kent4Carriage;
$kent6Carriage->linearBearingType = $linearBearingTypesEnum->kent6;
$kent6Carriage->extentZ = 4.5 * $inch;
$kent6Carriage->targetWayExtentX = $kent6Way->extentX;
//$kent6Carriage->extentX = 7 * $inch; //fix me
$kent6Carriage->extentX = 5 * $inch; //fix me

$pbcCarriage->linearBearingType = $linearBearingTypesEnum->pbc;
$pbcCarriage->mountingSurfaceOffset = 32.71599996179999 * $mm; 
$pbcCarriage->extentZ = 225 * $mm; 

$pbcWay->linearBearingType = $linearBearingTypesEnum->pbc;
$pbcWay->mountingSurfaceOffset = 20.2 * $mm;


$thkHsr20Way->linearBearingType = $linearBearingTypesEnum->thkHsr20;
$thkHsr20Way->mountingSurfaceOffset = 0 * $mm; //confirmed
$thkHsr20Way->extentX = 20 * $mm; //confirmed
$thkHsr20Way->recommendedAlignmentShoulderHeight = 3 * $mm; //FIX ME


$thkHsr20Carriage->linearBearingType = $linearBearingTypesEnum->thkHsr20;
$thkHsr20Carriage->mountingSurfaceOffset = 30 * $mm; // confirmed
$thkHsr20Carriage->extentZ = 70 * $mm; // (74 mm, if you measure to the outer edges of the protuberance that hugs the rail.  70mm is the distance between the large end plates, which looks like what Rcardo incorporated into the original design); 
$thkHsr20Carriage->extentX = 44 * $mm; 



$thkShs25Way->linearBearingType = $linearBearingTypesEnum->thkShs25;
$thkShs25Way->mountingSurfaceOffset = 0 * $mm; //confirmed
$thkShs25Way->extentX = 23 * $mm; //confirmed
$thkShs25Way->recommendedAlignmentShoulderHeight = 5 * $mm; //confirmed

$thkShs25Carriage->linearBearingType = $linearBearingTypesEnum->thkShs25;
$thkShs25Carriage->mountingSurfaceOffset = 36 * $mm; //confirmed
$thkShs25Carriage->extentZ = 92 * $mm; //confirmed in model //confirmed in real world 
$thkShs25Carriage->extentX = 70 * $mm; //confirmed






$m8Screw->majorDiameter = 8 * $mm;
$m8Screw->clearanceHoleDiameter = 9 * $mm; 
$m8Washer->innerDiameter = 8.4 * $mm; 
$m8Washer->outerDiameter = 16 * $mm; 
$m8Washer->thickness = 1.6 * $mm;
$m8Screw->washer = clone $m8Washer;
$m8Screw->headLandingDiameter = 20 * $mm; //1.1 * ($m8Screw->clearanceHoleDiameter + $m8Screw->washer->innerDiameter + $m8Screw->washer->outerDiameter - 2*$m8Screw->majorDiameter); //the part in parenthesis is the diameter of the circle that will be swept out by the outer edge of the washer if we slide the washer as far away from the hole as it will go (with the screw resting loosely in the hole), and then rotating the washer around the hole, always pulling it away from the center of the hole.
$m8Screw->clampingDiameter = 35 * $mm; //$m8Screw->headLandingDiameter;
	
	
$m4Screw->majorDiameter = 4 * $mm;
$m4Screw->clearanceHoleDiameter = 4.3 * $mm; 
$m4Washer->innerDiameter = 4.3 * $mm; 
$m4Washer->outerDiameter = 9 * $mm; 
$m4Washer->thickness = 0.8 * $mm;
$m4Screw->washer = clone $m4Washer;
$m4Screw->headLandingDiameter = 1.1 * ($m4Screw->clearanceHoleDiameter + $m4Screw->washer->innerDiameter + $m4Screw->washer->outerDiameter - 2*$m4Screw->majorDiameter); //the part in parenthesis is the diameter of the circle that will be swept out by the outer edge of the washer if we slide the washer as far away from the hole as it will go (with the screw resting loosely in the hole), and then rotating the washer around the hole, always pulling it away from the center of the hole.
$m4Screw->clampingDiameter = 1.3 * $m4Screw->headLandingDiameter; 


$aupn6516LimitSwitch->strokeY = 2.8 * $mm; //this is correct, as of 2016/06/28, but it is a bit of a hack to hard code this value here. //this is the distance between the guaranteed engagement plane and the guaranteed release plane of the limit switch.
$aupn6516LimitSwitch->engagedExtentY = 22.9 * $mm; //this is the distance (in the y direction of the limit switch frame) from the yMin plane of the body to the guarenteedEngagementY_plane. 
$aupn6516LimitSwitch->bodyExtentX = 27.8 * $mm; //confirmed
$aupn6516LimitSwitch->bodyExtentZ = 10.3 * $mm; //confirmed	


//============= CHOICE OF BEARING TYPES BETWEEN EACH PAIR OF STAGES ==============================

//$stage0To1LinearBearingType = $linearBearingTypesEnum->kent6;
//$stage0To1LinearBearingType = $linearBearingTypesEnum->pbc;
$stage0To1LinearBearingType = $linearBearingTypesEnum->kent4;


//$stage1To2LinearBearingType = $linearBearingTypesEnum->kent6;
//$stage1To2LinearBearingType = $linearBearingTypesEnum->thkHsr20;
$stage1To2LinearBearingType = $linearBearingTypesEnum->thkShs25;

$stage2To3LinearBearingType = $linearBearingTypesEnum->thkHsr20;


{ // RACK AND PINION, RACK CLAMPS

	class rack extends properties
	{
		public $extentX;
		public $extentY;
		public $extentZ;
		public $pitchPlaneOffset;
		public $pitch;
		public $pressureAngle;
		
		public function get_teethCount()
		{
			return ceil($this->extentX /$this->pitch);
		}
		
		public function get_teethSpan()
		{
			return $this->pitch * ($this->teethCount -1 );
		}
		
		// public function get_stockExtentZ()
		// {
			// return $this->pitchPlaneOffset + 0.27*$this->pitch;  // this is the extentZ of the stock into which we will cut the teeth.  I do not guarantee that the outer edge of the teeth will be exactly on this plane, but they will not extend in the positive z direction beyond this plane.  The zMax face of the rack is where the teeth are. //for our purposes, $rack->stockExtentZ has merely cosmetic effects (it affects the tooth shape (but for our purposes we really don't care what the tooth shape is in the model, since the teeth are really just a cosmetic nicety.
		// }
		
		public function get_dedendum()
		{
			global $inch;
			//return 0.4*$this->pitch ; //merely cosmetic.
			return 0.062 * $inch;
		}
		
		public function get_addendum()
		{
			return $this->extentZ - $this->pitchPlaneOffset ;
		}
		
		public function __construct()
		{
			global $inch, $mm, $degree;
			//default values:
			$this->extentX = 10 * $inch ;  //confirmed //this is the default value, to be overridden in instances
			$this->extentY = 0.5 * $inch; //confirmed //the rack is an extrusion in its y direction.
			$this->pitch = 1 * $inch * pi()/20; //confirmed
			$this->pitchPlaneOffset = 0.450 * $inch; //confirmed //this is the offset from the flat zMin surface of the rack to the pitch plane of the teeth.  The pitch plane is the plane that mates with the pitch cylinder of the pinion.
			$this->extentZ = 0.500 * $inch; //confirmed
			$this->pressureAngle = 20 * $degree;
		}
	}

	$defaultRack = new rack;
	
	class rackAndClamps extends properties
	{
		public $rack;
		public $clampsInterval;
		
		public function get_clampsCount()
		{
			$temp = floor($this->rack->extentX / $this->clampsInterval);
			if($temp == 0) {return 1;}else{return $temp;}
		}
		
		public function get_clampsSpan()
		{
			return $this->clampsInterval * ($this->clampsCount - 1); 
		}
		
		public function __construct()
		{
			global $inch, $mm, $degree;
			//default values:
			$this->clampsInterval = 10 * $inch;
			$this->rack = new rack;
		}
	}

	
	//this equation suppresses the pattern if there is only one instance
	//  "rackClamps_pattern" = Iif( "externalParameters.this.clampsCount" = 1, "suppressed", "unsuppressed")
	// This one is cleaner, although it does not work (equation editor complains of missing/deleted dimensions when count@rackClamps_pattern is 1. // "rackClamps_pattern" = Iif( "count@rackClamps_pattern" = 1, "suppressed", "unsuppressed")


	$defaultRackAndClamps = new rackAndClamps;

	
	$defaultPinion->pitch = 1 * $inch * pi()/20;
	$defaultPinion->pressureAngle = 20;
	$defaultPinion->overallWidth = 15/16 * $inch; 
	$defaultPinion->faceWidth = 1/2 * $inch; 
	$defaultPinion->hubDiameter = 0.84 * $inch; 
	$defaultPinion->boreDiameter = 0.5 * $inch; 
	$defaultPinion->pitchDiameter = 1 * $inch;
	$defaultPinion->outerDiameter = 1.1 * $inch;
	$defaultPinion->teethCount = 20; 
	
}



//============ STAGES ====================================



{  //STAGE0
	$stage0->framing->extentX= 1193.15002196000  * $mm; 
	$stage0->framing->extentY= 120  * $inch; 
	$stage0->framing->extentZ= 424.79986516  * $mm; 
	$stage0->framing->rexrothBeam->squareSideLength = 60 * $mm;

	//$stage0->way->extentZ = $stage0->framing->extentY;
	$stage0->way->extentZ = 120 * $inch ; //remember that the stage0->way's z axis is parallel to the machine's x axis.

	$stage0->way->subwayIntervalX = (49+11/16 - 1/4) * $inch; //the distance between the z axes of the two subways in stage0->way
	$stage0->way->mountingSurfaceOffset = 0; //The stage0 way does not have a single mounting surface (because it consists of sub ways whose mounting surfaces are not coincident), but it does make sense to define a plane that will be participate in the same sort of mates with the rest of the larger assembly as would a mounting surface for a traditional way.


	$stage0->subwayType = $stage0To1LinearBearingType;	
	switch($stage0->subwayType){
		case $linearBearingTypesEnum->kent4:
			$stage0->way->subway = clone $kent4Way;
			$stage0->wayStyle = "kent4";
		break;
		
		case $linearBearingTypesEnum->kent6:
			$stage0->way->subway = clone $kent6Way;
			$stage0->wayStyle = "kent6";
		break;
		
		case $linearBearingTypesEnum->pbc:
			$stage0->way->subway = clone $pbcWay;
			$stage0->wayStyle = "pbc";
		break;
		
		default:
			//do nothing
		break;
	}
	
	$stage0->way->subway->extentZ = $stage0->way->extentZ;
	
	$stage0->waySpacerBlock->extentX = ($stage0->way->subwayIntervalX - $stage0->framing->extentX)/2 -  $stage0->way->subway->mountingSurfaceOffset;
	$stage0->waySpacerBlock->extentY = 4 * $inch;
	$stage0->waySpacerBlock->extentZ = (2 + 3/8) * $inch; //$stage0->framing->rexrothBeam->squareSideLength;

	$stage0->waySpacers->span = $stage0->way->extentZ - $stage0->waySpacerBlock->extentY ;
	$stage0->waySpacers->count = 11;
	$stage0->waySpacers->interval = $stage0->waySpacers->span / ($stage0->waySpacers->count - 1);
	
	
	
	$stage0->rack = clone $defaultRack;
	$stage0->rack->extentX = $stage0->framing->extentY - 5 * $inch; //the " - 5 * $inch " is purely cosmetic and a test of the configuration-aware propertyImporter.
	//$stage0->rack->extentX = 7 * $inch; //debugging only

	$stage0->rackAndClamps = clone $defaultRackAndClamps;
	$stage0->rackAndClamps->rack = $stage0->rack;
}

{  //STAGE1
	//this is the interval between the two linear rails.

	$stage1->extentY = 30 * $inch;

	$stage1->carriage->subcarriageType = $stage0To1LinearBearingType;
	switch($stage1->carriage->subcarriageType){
		case $linearBearingTypesEnum->kent4:
			$stage1->carriage->subcarriage = $kent4Carriage;
			$stage1->carriageStyle = "kent4";
			$stage1->carriage->subcarriageStyle = "kent4";
		break;
		
		case $linearBearingTypesEnum->kent6:
			$stage1->carriage->subcarriage = $kent6Carriage;
			$stage1->carriageStyle = "kent6";
			$stage1->carriage->subcarriageStyle = "kent6";
		break;
		
		case $linearBearingTypesEnum->pbc:
			$stage1->carriage->subcarriage = $pbcCarriage;
			$stage1->carriageStyle = "pbc";
			$stage1->carriage->subcarriageStyle = "pbc";
			$stage1->carriage->subcarriageStyle = "kent6";
		break;
		
		default:
			//do nothing
		break;
	}
	// \configuration{externalParameters.this.subcarriageStyle}
	/* equations for carriage^stage1.sldasm 
		// using equations to drive the suppression state of folders that contain subfolders appears to cause crashing.  The workaround is to drive the suppression state of the subfolders individually (highly annoying)
	
		"kent-styleConfiguration_folder"  =   Iif("externalParameters.this.subcarriageType" = "externalParameters.linearBearingTypesEnum.pbc",   "suppressed",    "unsuppressed"  )
			"subcarriages_folder2"  =   Iif("externalParameters.this.subcarriageType" = "externalParameters.linearBearingTypesEnum.pbc",   "suppressed",    "unsuppressed"  )	
			"rexrothBeams_folder"  =   Iif("externalParameters.this.subcarriageType" = "externalParameters.linearBearingTypesEnum.pbc",   "suppressed",    "unsuppressed"  )
		
		"PBC-styleConfiguration_folder"   =   Iif("externalParameters.this.subcarriageType" = "externalParameters.linearBearingTypesEnum.pbc",   "unsuppressed",  "suppressed"    )	
			"subcarriages_folder1"   =   Iif("externalParameters.this.subcarriageType" = "externalParameters.linearBearingTypesEnum.pbc",   "unsuppressed",  "suppressed"    )	
			"subcarriageJoiningPlates_folder"   =   Iif("externalParameters.this.subcarriageType" = "externalParameters.linearBearingTypesEnum.pbc",   "unsuppressed",  "suppressed"    )	
			"shims_folder"   =   Iif("externalParameters.this.subcarriageType" = "externalParameters.linearBearingTypesEnum.pbc",   "unsuppressed",  "suppressed"    )	


			
	*/
	
/* equations for way^stage1.sldasm 


"D1@mountingSurface_plane"= "externalParameters.stage1.way.mountingSurfaceOffset"
"kentWay-1.Part"= Iif ( "externalParameters.stage1.wayType" = "externalParameters.linearBearingTypesEnum.kent4" OR "externalParameters.stage1.wayType" = "externalParameters.linearBearingTypesEnum.kent6" , "unsuppressed" , "suppressed" )
"D1@subwayPositioner_sketch"= "externalParameters.this.subwayIntervalX"
"thkStyleWay-1.Assembly" = Iif ( "externalParameters.stage1.wayType" = "externalParameters.linearBearingTypesEnum.thk" , "unsuppressed" , "suppressed" ) 
"thkStyleWay-2.Assembly" = Iif ( "externalParameters.stage1.wayType" = "externalParameters.linearBearingTypesEnum.thk" , "unsuppressed" , "suppressed" ) 
"subwayPositioner_sketch" = Iif ( "externalParameters.stage1.wayType" = "externalParameters.linearBearingTypesEnum.thk", "unsuppressed" , "suppressed" )	
"basePlate-1" = Iif ( "externalParameters.stage1.wayType" = "externalParameters.linearBearingTypesEnum.thk" , "unsuppressed" , "suppressed" ) 
	
//Improved version

"D1@xMin_plane"="externalParameters.this.extentX"/2
"D1@xMax_plane"="externalParameters.this.extentX"/2
"D1@zMin_plane"="externalParameters.this.extentZ"/2
"D1@zMax_plane"="externalParameters.this.extentZ"/2
"D1@mountingSurface_plane"= "externalParameters.this.mountingSurfaceOffset"
"D1@subwayPositioner_sketch"= "externalParameters.this.subwayIntervalX"

'"kent_folder" = Iif ( "externalParameters.stage1.wayType" = "externalParameters.linearBearingTypesEnum.kent4" OR "externalParameters.stage1.wayType" = "externalParameters.linearBearingTypesEnum.kent6" , "unsuppressed" , "suppressed" )
'"thk_folder" = Iif ( "externalParameters.stage1.wayType" = "externalParameters.linearBearingTypesEnum.thkHsr20" OR "externalParameters.stage1.wayType" = "externalParameters.linearBearingTypesEnum.thkShs25" , "unsuppressed" , "suppressed" )
'"thkHsr20_folder" = Iif ( "externalParameters.stage1.wayType" = "externalParameters.linearBearingTypesEnum.thkHsr20" , "unsuppressed" , "suppressed" )
'"thkShs25_folder" = Iif ( "externalParameters.stage1.wayType" = "externalParameters.linearBearingTypesEnum.thkShs25" , "unsuppressed" , "suppressed" )

'highly annoying: suppression state of folder does not reliably propagate to components within the folder, so we have to drive the state of each component explicitly.
'Actually, the problem appears to be deeper than that -- I do not totally understand it.  It seems that drivig the suppression state of folders with equations is, at the very least, nonfunctional,
' and at the very worst, prone to causing crashing, particularly when the propertyImporter is active.
"subwayPositioner_sketch" = Iif (  "externalParameters.stage1.wayType" = "externalParameters.linearBearingTypesEnum.thkHsr20" OR "externalParameters.stage1.wayType" = "externalParameters.linearBearingTypesEnum.thkShs25", "unsuppressed" , "suppressed" )	
"xMaxSubwayPosition_point" = Iif (  "externalParameters.stage1.wayType" = "externalParameters.linearBearingTypesEnum.thkHsr20" OR "externalParameters.stage1.wayType" = "externalParameters.linearBearingTypesEnum.thkShs25", "unsuppressed" , "suppressed" )	
"xMinSubwayPosition_point" = Iif (  "externalParameters.stage1.wayType" = "externalParameters.linearBearingTypesEnum.thkHsr20" OR "externalParameters.stage1.wayType" = "externalParameters.linearBearingTypesEnum.thkShs25", "unsuppressed" , "suppressed" )	
"basePlate-1.Part" = Iif (  "externalParameters.stage1.wayType" = "externalParameters.linearBearingTypesEnum.thkHsr20" OR "externalParameters.stage1.wayType" = "externalParameters.linearBearingTypesEnum.thkShs25" , "unsuppressed" , "suppressed" ) 
"subway-1.Assembly" = Iif (  "externalParameters.stage1.wayType" = "externalParameters.linearBearingTypesEnum.thkHsr20" OR "externalParameters.stage1.wayType" = "externalParameters.linearBearingTypesEnum.thkShs25" , "unsuppressed" , "suppressed" ) 
"subway-2.Assembly" = Iif (  "externalParameters.stage1.wayType" = "externalParameters.linearBearingTypesEnum.thkHsr20" OR "externalParameters.stage1.wayType" = "externalParameters.linearBearingTypesEnum.thkShs25" , "unsuppressed" , "suppressed" ) 
'"subwayMountHoles_holeWizard" = Iif (  "externalParameters.stage1.wayType" = "externalParameters.linearBearingTypesEnum.thkHsr20" OR "externalParameters.stage1.wayType" = "externalParameters.linearBearingTypesEnum.thkShs25" , "unsuppressed" , "suppressed" ) 

"kentWay-1.Part"= Iif ( "externalParameters.stage1.wayType" = "externalParameters.linearBearingTypesEnum.kent4" OR "externalParameters.stage1.wayType" = "externalParameters.linearBearingTypesEnum.kent6" , "unsuppressed" , "suppressed" )

	
	
//"On Plane1@xMaxHelper_sketch" = Iif ( "externalParameters.stage1.wayType" = "externalParameters.linearBearingTypesEnum.thk" , "U" , "S" ) 
//"$STATE@On Plane1@xMaxHelper_sketch"
*/

/*  equations for stage1.way.subway
"D1@zMin_plane"="externalParameters.this.extentZ"/2
"D1@zMax_plane"="externalParameters.this.extentZ"/2
"thkHsr20Way<1>" = Iif ( "externalParameters.this.linearBearingType" = "externalParameters.linearBearingTypesEnum.thkHsr20" , "unsuppressed" , "suppressed" )
"thkShs25Way<1>" = Iif ( "externalParameters.this.linearBearingType" = "externalParameters.linearBearingTypesEnum.thkShs25" , "unsuppressed" , "suppressed" )
		
	

	
*/
	$stage1->wayType = $stage1To2LinearBearingType;
	switch($stage1->wayType){
		case $linearBearingTypesEnum->kent4:
			$stage1->way = clone $kent4Way;
			$stage1->wayStyle = "kent4";
		break;
		
		case $linearBearingTypesEnum->kent6:
			$stage1->way = clone $kent6Way;
			$stage1->wayStyle = "kent6";
		break;
		
		case $linearBearingTypesEnum->pbc:
			$stage1->way = clone $pbcWay;
			$stage1->wayStyle = "pbc";
		break;
		
		case $linearBearingTypesEnum->thkHsr20:
			$stage1->way->subway = clone $thkHsr20Way;
			//$stage1->wayStyle = "thkHsr20";
		break;
		
		case $linearBearingTypesEnum->thkShs25:
			$stage1->way->subway = clone $thkShs25Way;
			//$stage1->wayStyle = "thkShs25";
		break;
		
		default:
			//do nothing
		break;
	}
	
	$stage1->carriage->subcarriageIntervalX = $stage0->way->subwayIntervalX;
	$stage1->carriage->subcarriageIntervalZ = $stage1->extentY - $stage1->carriage->subcarriage->extentZ;
	
	$stage1->yMinBoundToWayIntervalY = 20 * $inch;

	$stage1->carriageJoiningPlate->extentX = 0.375 * $inch; //Jeff's original design: 0.375 * $inch
	$stage1->carriageJoiningPlate->extentY = $stage1->extentY; //Jeff's original design: 18 * $inch

	$stage1->carriageJoiningPlate->extentZ = 11.00 * $inch; //Jeff's original design: 11 * $inch
	
	//$stage1->carriagesToWayIntervalZ // the way in stage 1 will be at a more positive Z position than the carriages, by this distance.  The datums on the bearings and the way are the logical zCenter of the bearings. (i.e. if there are two v-ways, the z position is half way between the ways).
	switch($stage1->carriage->subcarriageType){
		case $linearBearingTypesEnum->kent4:
		case $linearBearingTypesEnum->kent6:
			$stage1->carriagesToWayIntervalZ = 121.2 * $mm;
		break;
		
		case $linearBearingTypesEnum->pbc:
			$stage1->carriagesToWayIntervalZ = 250 * $mm; //FIX ME
		break;
		
		default:
			//do nothing
		break;
	}

	$stage1->rack = clone $defaultRack;
	$stage1->rack->extentX = 48*$inch;
	//$stage1->rack->extentX = 23*$inch; //debugging only
	//$stage1->way->extentZ = 43.5 * $inch;
	$stage1->carriage->rexrothBeam->squareSideLength = 45 * $mm;
	$stage1->carriage->rexrothBeam->extentZ = 24 * $inch;
	$stage1->rexrothBracket->legLength = 86 * $mm;
	$stage1->way->extentZ = $stage1->carriage->subcarriageIntervalX + 2* ($stage1->carriage->subcarriage->mountingSurfaceOffset - $stage1->carriage->rexrothBeam->squareSideLength - $stage1->rexrothBracket->legLength - 3 * $mm);
	
	$stage1->rexrothBeam->extentZ = $stage1->carriage->subcarriageIntervalX + 2* ($stage1->carriage->subcarriage->mountingSurfaceOffset - $stage1->carriage->rexrothBeam->squareSideLength);
	
	$stage1->rackAndClamps = clone $defaultRackAndClamps;
	$stage1->rackAndClamps->rack = $stage1->rack;
	$stage1->rackAndClamps->clampsInterval = 10 * $inch;
	
	$stage1->pinion = clone $defaultPinion;
	$stage1->pinion->hubDiameter = 0.75 * $inch; 
	$stage1->pinion->pitchDiameter = 0.9 * $inch;
	$stage1->pinion->outerDiameter = 1.0 * $inch;
	$stage1->pinion->teethCount = 18;
	$stage1->pinion->boreDiameter = 10 *$mm;

	//Design of thk-style composite way
	If ($stage1To2LinearBearingType == $linearBearingTypesEnum->thkHsr20 OR $stage1To2LinearBearingType == $linearBearingTypesEnum->thkShs25)
	{
		$stage1->way->subwayIntervalX = 150 * $mm; //6 * $inch; //FIX ME
		//$stage1->way->mountingSurfaceOffset = $stage1->way->subway->mountingSurfaceOffset;
		$stage1->way->extentX = $stage1->way->subwayIntervalX + $stage1->way->subway->extentX;
		
		$stage1->way->basePlate->alignmentShoulderShallBeCutIntoBasePlate = true; //determines whether the alignment shoulder is hewn into the basePlate (so that basePlate-plus-alignmentShoulder are a single hunk of metal) or, alternatively, whether the alignment shoulder will be a separate pice of metal.
		
		$stage1->way->basePlate->alignmentShoulderHeight = $stage1->way->subway->recommendedAlignmentShoulderHeight; //the alignment shoulder will stick up this far above the mounting surface of the subways.
		$stage1->way->basePlate->stockThickness = 0.75 * $inch; //fix me
		$stage1->way->basePlate->extentY = $stage1->way->basePlate->stockThickness;
		
		if($stage1->way->basePlate->alignmentShoulderShallBeCutIntoBasePlate)
		{
			$stage1->way->basePlate->mountingSurfaceOffset = $stage1->way->basePlate->extentY - $stage1->way->basePlate->alignmentShoulderHeight; //this is the offset between the mounting surface of the base plate and the mounting surface of the subway.
		}
		else
		{
			$stage1->way->basePlate->mountingSurfaceOffset = $stage1->way->basePlate->extentY; //this is the offset between the mounting surface of the base plate and the mounting surface of the subway.
		}
		
		
		
		
		//$stage1->way->subway->extentZ = $stage1->way->extentZ;
		//$stage1->way->subway->extentZ = 1221 * $mm;

		$stage1->way->subway->extentZ = $stage1->way->extentZ;
		
		$stage1->way->basePlate->extentZ = $stage1->way->extentZ;
		$stage1->way->basePlate->extentX = $stage1->way->extentX;
		$stage1->way->mountingSurfaceOffset = $stage1->way->subway->mountingSurfaceOffset + $stage1->way->basePlate->mountingSurfaceOffset;
		
		$stage1->way->basePlate->mountHolesToRexroth->clampingDiameter = 30 * $mm;
		$stage1->way->basePlate->mountHolesToRexroth->interval = 60 * $mm ; //fix me
		$stage1->way->basePlate->mountHolesToRexroth->count = 1 + floor(  ($stage1->way->basePlate->extentZ - $stage1->way->basePlate->mountHolesToRexroth->clampingDiameter)  /$stage1->way->basePlate->mountHolesToRexroth->interval);
		$stage1->way->basePlate->mountHolesToRexroth->span = $stage1->way->basePlate->mountHolesToRexroth->interval * ($stage1->way->basePlate->mountHolesToRexroth->count - 1);
		$stage1->way->basePlate->mountHolesToRexroth->screw = clone $m8Screw;
		$stage1->way->basePlate->mountHolesToRexroth->maximumAllowedScrewHeadHeight = 10 * $mm; //fix me
		// "mountHolesToRexroth_pattern" = Iif("externalParameters.this.mountHolesToRexroth.count" = 1, "suppressed", "unsuppressed")
		// "alignmentShoulderWidth@alignmentShoulder_sketch" = "externalParameters.stage1.way.subwayIntervalX" - "externalParameters.stage1.way.subway.extentX"
		// "alignmentShoulderHeight@alignmentShoulder_sketch" = "externalParameters.this.alignmentShoulderHeight"
		// "alignmentShoulder<1>" = Iif("externalParameters.stage1.way.basePlate.alignmentShoulderShallBeCutIntoBasePlate", "suppressed", "unsuppressed")
		// "basePlateAndAlignmentShoulder<2>.Assembly" = Iif ( "externalParameters.stage1.wayType" = "externalParameters.linearBearingTypesEnum.thkHsr20" OR "externalParameters.stage1.wayType" = "externalParameters.linearBearingTypesEnum.thkShs25" , "unsuppressed" , "suppressed" )
		

		{ //stage1 - stage2 limit switch and nub design (not sure where to put this stuff)
	
			
			

			
			$stage1->way->limitSwitchToHardStopOffset = 5 * $mm; //3 * $mm; //fix me
			
			
			$stage1->limitSwitch = clone $aupn6516LimitSwitch;
			
			// $stage2->carriage->limitNub->diameter = 1/2 * $inch; //fix me
			// $stage2->carriage->limitNubOffsetFromButtSurfaceOfStopBlock = 50 * $mm; //fix me
			
			// //$stage1->limitSwitchEngagementPointOffsetFromButtSurfaceOfStopBlock = $stage2->carriage->limitNubOffsetFromButtSurfaceOfStopBlock + $stage1->way->limitSwitchToHardStopOffset;
			
			// $stage2->carriage->limitNub->extentY = 1 * $inch; //fix me (should be defined in terms of other parameters and possibly in terms of the available COTS hardware)
			// $stage1->limitLaneWidth = $stage1->limitSwitch->engagedExtentY + $stage2->carriage->limitNub->diameter;
			
			
			// $stage1->limitSwitch->mountingBracket->extentZ= 3.5 * $mm; //fix me
			// $stage1->limitSwitch->mountingBracket->extentX = 35 * $mm; //fix me
			// //$stage1->limitSwitch->mountingBracket->extentY = 30 * $mm; //fix me
			// $stage1->limitSwitch->mountingBracket->proximalMountScrews->nominalInterval = 20*$mm; //fix me
			// //$stage1->limitSwitch->mountingBracket->proximalMountScrews->screw = ...;
			// $stage1->limitSwitch->mountingBracket->proximalMountScrews->screw->clampingDiameter = 8 * $mm; //fix me
			// $stage1->limitSwitch->mountingBracket->proximalMountScrews->screw->clearanceDiameter = 4.3 * $mm; //fix me
			// $stage1->limitSwitch->mountingBracket->slopX = 8 * $mm;
			// //$stage1->limitSwitch->mountingBracket->slotLength = $stage1->limitSwitch->mountingBracket->proximalMountScrews->nominalInterval + 10 * $mm; //fix me
			
			
			$stage1->way->limitSwitch = clone $aupn6516LimitSwitch;
			$stage1->way->limitSwitchBracket->proximalMountScrews->screw = $m4Screw; //clone $stage1->limitSwitch->mountingBracket->proximalMountScrews->screw; //fix me
			$stage1->way->limitSwitchBracket->slopZ = 8 * $mm; //fix me
			$stage1->way->limitSwitchBracket->proximalMountScrews->interval = 20 * $mm;
			$stage1->way->limitSwitchBracket->thickness = 1/8 * $inch;
			// $stage1->way->limitSwitchBracket->extentX = $stage1->way->limitSwitchBracket->thickness + $stage1->way->limitSwitchBracket->proximalMountScrews->screw->clampingDiameter;
			$stage1->way->limitSwitchBracket->extentX = $stage1->way->limitSwitchBracket->thickness + $stage1->way->limitSwitchBracket->proximalMountScrews->screw->headLandingDiameter; //I had to make this a bit shorter than originally intended in order not to interfered with stage2.carriage.subcarriage.
			$stage1->way->limitSwitchBracket->extentZ = max( $stage1->way->limitSwitchBracket->proximalMountScrews->interval + $stage1->way->limitSwitchBracket->slopZ + $stage1->way->limitSwitchBracket->proximalMountScrews->screw->clampingDiameter, $stage1->way->limitSwitch->bodyExtentX);	
			
			$stage1->way->limitSwitchBracketToStage2CarriageClearanceX = 2 * $mm;
			$stage1->way->limitSwitchToStopBlockClearanceX = 4 * $mm; //this has to be large enough to accomoadte the height of the heads of the screws used to bind the limit switch to the limit switch bracket.
			

		}
	}

}

{  //STAGE2
	$stage2->carriageType = $stage1To2LinearBearingType;
	$stage2->leadNutBlock->mountingSurfaceToLeadSrewOffset = 20.625 * $mm; //confirmed (it looks like Ricardo designed this distance so that the $stage2->waySpacer->extentY would work out to exactly 5/8 inch.
	
	/* equations for carriage^stage2.sldasm

"D1@mountingSurface_plane"= "externalParameters.this.mountingSurfaceOffset"
"intervalZ@subCarriagePositions_sketch"="externalParameters.this.subcarriageIntervalZ"
"intervalX@subCarriagePositions_sketch"="externalParameters.this.subcarriageIntervalX"

"kentCarriage \configuration{externalParameters.stage2.carriageStyle}" = Iif ("externalParameters.stage2.carriageType" = "externalParameters.linearBearingTypesEnum.kent4" OR "externalParameters.stage2.carriageType" = "externalParameters.linearBearingTypesEnum.kent6" , "unsuppressed" , "suppressed" )
"subcarriages_pattern" = Iif ("externalParameters.stage2.carriageType" = "externalParameters.linearBearingTypesEnum.thkHsr20" OR "externalParameters.stage2.carriageType" = "externalParameters.linearBearingTypesEnum.thkShs25"  , "unsuppressed" , "suppressed" )
"subcarriagePositions_sketch" = Iif ("externalParameters.stage2.carriageType" = "externalParameters.linearBearingTypesEnum.thkHsr20" OR "externalParameters.stage2.carriageType" = "externalParameters.linearBearingTypesEnum.thkShs25"  , "unsuppressed" , "suppressed" )
"subcarriage<1>.Assembly" = Iif ("externalParameters.stage2.carriageType" = "externalParameters.linearBearingTypesEnum.thkHsr20" OR "externalParameters.stage2.carriageType" = "externalParameters.linearBearingTypesEnum.thkShs25"  , "unsuppressed" , "suppressed" )
			
	*/


	switch($stage2->carriageType){
		case $linearBearingTypesEnum->kent4:
			$stage2->carriage = clone $kent4Carriage;
			$stage2->carriageStyle = "kent4";
		break;
		
		case $linearBearingTypesEnum->kent6:
			$stage2->carriage = clone $kent6Carriage;
			$stage2->carriageStyle = "kent6";
		break;
		
		case $linearBearingTypesEnum->pbc:
			$stage2->carriage = clone $pbcCarriage;
			$stage2->carriageStyle = "pbc";
		break;
		
		case $linearBearingTypesEnum->thkHsr20:
			$stage2->carriage->subcarriage = clone $thkHsr20Carriage;
			//$stage2->carriageStyle = "thkHsr20";
		break;
		
		case $linearBearingTypesEnum->thkShs25:
			$stage2->carriage->subcarriage = clone $thkShs25Carriage;
			//$stage2->carriageStyle = "thkShs25";
		break;
		
		default:
			//do nothing
		break;
	}


	$stage2->way->subway = clone $thkHsr20Carriage; //yes, this is correct, stage2's ways are what we would naively describe as 'carriages'.
	$stage2->way->mountingSurfaceOffset = $stage2->way->subway->mountingSurfaceOffset;

	$stage2->way->subwayIntervalX = 120.4 * $mm; //confirmed
	$stage2->way->subwayIntervalZ =  5.24409449 * $inch; //confirmed (probably intended to be 133.2mm, by design, but the solidworks units where this is defined are inches, so I am leaving it in the ugly inch units).
	
	//temp hack:
	//$stage2->way->subwayIntervalX = 180 * $mm; 

	$stage2->way->extentZ = $stage2->way->subwayIntervalZ + $stage2->way->subway->extentZ;
	$stage2->way->extentX = $stage2->way->subwayIntervalX + $stage2->way->subway->extentX;
	
	$stage2->waySpacer->subwaySpacer->extentX = $stage2->way->subway->extentX;
	
	$stage2->waySpacer->subwaySpacer->extentZ = $stage2->way->subwayIntervalZ + $stage2->way->subway->extentZ;

	$stage2->waySpacer->subwaySpacerIntervalX = $stage2->way->subwayIntervalX;
	$stage2->waySpacer->extentX = $stage2->waySpacer->subwaySpacerIntervalX + $stage2->waySpacer->subwaySpacer->extentX;
	$stage2->waySpacer->extentZ = $stage2->waySpacer->subwaySpacer->extentZ;
	
	$stage2->pinion = clone $defaultPinion;
	
	//Design of thk-style composite carriage
	If ($stage1To2LinearBearingType == $linearBearingTypesEnum->thkHsr20 OR $stage1To2LinearBearingType == $linearBearingTypesEnum->thkShs25)
	{
		$stage2->carriage->subcarriageIntervalX = $stage1->way->subwayIntervalX;
		$stage2->carriage->mountingSurfaceOffset = $stage2->carriage->subcarriage->mountingSurfaceOffset;
		$stage2->carriage->subcarriageIntervalZ = 290 * $mm; //FIX ME
		
		$stage2->carriage->extentX = $stage2->carriage->subcarriageIntervalX + $stage2->carriage->subcarriage->extentX;
		$stage2->carriage->extentZ = $stage2->carriage->subcarriageIntervalZ + $stage2->carriage->subcarriage->extentZ;
		
		$stage2->carriage->stopAllowance = 2 * $mm; //this is the minimum distance that we will allow the end of the carriage to get to the end of the way.  We will use this to determine where to place the stop block on the carriage
		
		
		// $stage1->way->stopBlock->extentY = ($stage1->way->subway->mountingSurfaceOffset + $stage2->carriage->subcarriage->mountingSurfaceOffset - $stage1->way->basePlate->alignmentShoulderHeight + 15 * $mm)/2 ; 
		$stage1->way->stopBlock->extentY = 1 * $inch ; 
		
		$stage1->way->stopBlock->extentX = 
			2*(
				  1/2 * $stage1->way->subwayIntervalX 
				- 1/2 * $stage2->carriage->subcarriage->extentX
				- $stage1->way->limitSwitchBracket->thickness
				- $stage1->way->limitSwitch->bodyExtentZ
				- $stage1->way->limitSwitchToStopBlockClearanceX
			);
		$stage1->way->stopBlock->mountHoles->screw = $m8Screw;
		// $stage1->way->stopBlock->mountHoles->intervalX = $stage1->way->stopBlock->extentX - $stage1->way->stopBlock->mountHoles->screw->clampingDiameter;
		$stage1->way->stopBlock->mountHoles->intervalX = $stage1->way->stopBlock->extentX - 20 * $mm;
		$stage1->way->stopBlock->extentZ = 35 * $mm; //fix me
		
		
		$stage2->carriage->stopBlockToScrewHeadClearance = 1.6 * $mm; //the clearance between the bottom of stage 2's stopBlock and the top of the heads of the screws binding the stage1.way.basePlate to stage1.rexroth
		// // // $stage2->carriage->stopBlock->extentX = $stage1->way->stopBlock->extentX; // $stage1->way->stopBlock->extentX + 2* ($stage1->limitSwitch->strokeY); 
		// // // $stage2->carriage->stopBlock->extentY = $stage1->way->stopBlock->extentY; //fix me
		// // // $stage2->carriage->stopBlock->extentZ = $stage1->way->stopBlock->extentZ;
		// // // $stage2->carriage->stopBlock->mountHoles->intervalX = 60 * $mm; //fix me
		$stage2->carriage->stopBlock = clone $stage1->way->stopBlock;
		
		$stage2->carriage->stopBlock->extentY = 
			min(
				$stage1->way->stopBlock->extentX,
				($stage1->way->subway->mountingSurfaceOffset + $stage2->carriage->subcarriage->mountingSurfaceOffset - $stage1->way->basePlate->alignmentShoulderHeight) - $stage1->way->basePlate->mountHolesToRexroth->maximumAllowedScrewHeadHeight - $stage2->carriage->stopBlockToScrewHeadClearance
			);
			
		$stage2->carriage->stopBlockEdgeInterval = $stage2->carriage->extentZ - 2* $stage1->way->stopBlock->extentZ + 2 * $stage2->carriage->stopAllowance; //the distance between the outer edges of the stop blocks.  //we are assuming that the outer edge of the way's stop blocks will be coineicdent with the extreme Z planes of the way.
	}
	/*  equations for stage2.carriage.subcarriage
"thkHsr20RSSCarriage<1>.Assembly" = Iif ( "externalParameters.this.linearBearingType" = "externalParameters.linearBearingTypesEnum.thkHsr20" , "unsuppressed" , "suppressed" ) 
"thkShs25CSSCarriage<1>.Assembly" = Iif ( "externalParameters.this.linearBearingType" = "externalParameters.linearBearingTypesEnum.thkShs25" , "unsuppressed" , "suppressed" )

'' The following are note strictly necessary, because a mate involving a suppressed component is automatically suprressed, so we do not have to explicitly suppress the mate below.
'"Coincident4" = Iif ( "externalParameters.this.linearBearingType" = "externalParameters.linearBearingTypesEnum.thkShs25" , "unsuppressed" , "suppressed" )
'"Coincident6" = Iif ( "externalParameters.this.linearBearingType" = "externalParameters.linearBearingTypesEnum.thkShs25" , "unsuppressed" , "suppressed" )
'"Coincident8" = Iif ( "externalParameters.this.linearBearingType" = "externalParameters.linearBearingTypesEnum.thkShs25" , "unsuppressed" , "suppressed" )
'"Coincident10" = Iif ( "externalParameters.this.linearBearingType" = "externalParameters.linearBearingTypesEnum.thkShs25" , "unsuppressed" , "suppressed" )
'
'"Coincident12" = Iif ( "externalParameters.this.linearBearingType" = "externalParameters.linearBearingTypesEnum.thkHsr20" , "unsuppressed" , "suppressed" )	
'"Coincident14" = Iif ( "externalParameters.this.linearBearingType" = "externalParameters.linearBearingTypesEnum.thkHsr20" , "unsuppressed" , "suppressed" )	
'"Coincident16" = Iif ( "externalParameters.this.linearBearingType" = "externalParameters.linearBearingTypesEnum.thkHsr20" , "unsuppressed" , "suppressed" )	
'"Coincident18" = Iif ( "externalParameters.this.linearBearingType" = "externalParameters.linearBearingTypesEnum.thkHsr20" , "unsuppressed" , "suppressed" )	
		
	*/
	
	
	$stage2->mainPlate->extentY = 0.5 * $inch;
	
	/* equations for stage2.mainPlate.mainPlate
"D1@yMax_plane"= "externalParameters.this.extentY" / 2
"D1@yMin_plane"= "externalParameters.this.extentY" / 2
"carriageExtentX@carriageExtremeXFollower_sketch"= "externalParameters.stage2.carriage.extentZ"
"carriageExtentZ@carriageExtremeZFollower_sketch"= "externalParameters.stage2.carriage.extentX"
"wayExtentX@wayExtremeXFollower_sketch"= "externalParameters.stage2.way.extentX"
"wayExtentZ@wayExtremeZFollower_sketch"= "externalParameters.stage2.way.extentZ"

"thkShs25CCarriageMountHoleSeed" = Iif ( "externalParameters.stage2.carriageType" = "externalParameters.linearBearingTypesEnum.thkShs25" , "unsuppressed" , "suppressed" )
"thkShs25CCarriageMountHoles_pattern" = Iif ( "externalParameters.stage2.carriageType" = "externalParameters.linearBearingTypesEnum.thkShs25" , "unsuppressed" , "suppressed" )
	
"thkHsr20RCarriageMountHoleSeed" = Iif ( "externalParameters.stage2.carriageType" = "externalParameters.linearBearingTypesEnum.thkHsr20" , "unsuppressed" , "suppressed" )
"thkHsr20RCarriageMountHoles_pattern" = Iif ( "externalParameters.stage2.carriageType" = "externalParameters.linearBearingTypesEnum.thkHsr20" , "unsuppressed" , "suppressed" )

	*/
	

	$stage2->motorMountBracket->mountingToMainPlate->screw = clone $m8Screw;
	
	$stage2->motorMountClearanceZToStage1 = 0.1 * $inch; //the surface of the motor mount bracket nearest stage1 will not get closer to stage 1 than this distance.
	
	$stage2->motorMountBracket->extentX = 6 * $inch + $m8Screw->clampingDiameter; //The intervalX between the mount holes in the motorMountPlate is 6 inches.
	$stage2->motorMountBracket->extentY = 6 * $inch; //by default, this should match the stock angle dimension.
	$stage2->motorMountBracket->internalCornerFilletRadius = 0.5 * $inch; //confirmed by measurement with radius gauges on angle sample
	$stage2->motorMountBracket->angle->distalArmFilletRadius = 0.375 * $inch; //confirmed by measurement with radius gauges on angle sample

	
	$stage2->motorMountBracket->angleThickness = 0.75 * $inch;
	//$stage2->motorMountBracket->mountingRectangleToMainPlate->extentZ = 3*$inch; //fix me //this is a little bit contrived, but it is the extentZ of a rectangle in which we are guaranteed to have a flat metal surface for bolt heads and washers to bear against.  It is the extentZ of the bracket minus the angleThickness minus the internal corenr fillet radius.
	//$stage2->motorMountBracket->extentZ = $stage2->motorMountBracket->mountingRectangleToMainPlate->extentZ + $stage2->motorMountBracket->internalCornerFilletRadius + $stage2->motorMountBracket->angleThickness;

	
	
	$stage2->motorMountBracket->mountHolesToMainPlate->intervalX = $stage2->motorMountBracket->extentX - max($stage2->motorMountBracket->mountingToMainPlate->screw->headLandingDiameter , $stage2->motorMountBracket->mountingToMainPlate->screw->clampingDiameter ); 
	$stage2->motorMountBracket->mountHolesToMainPlate->row1OffsetFromZMin = max(1/2*$stage2->motorMountBracket->mountingToMainPlate->screw->clampingDiameter , $stage2->motorMountBracket->angleThickness + $stage2->motorMountBracket->internalCornerFilletRadius + 1/2*$stage2->motorMountBracket->mountingToMainPlate->screw->headLandingDiameter); //the interval from the zMin surface to the zMin row of mount holes 
	//$stage2->motorMountBracket->mountHolesToMainPlate->row2OffsetFromZMin = $stage2->motorMountBracket->extentZ - 1/2 * max($stage2->motorMountBracket->mountingToMainPlate->screw->headLandingDiameter , $stage2->motorMountBracket->mountingToMainPlate->screw->clampingDiameter ); //the interval from the zMin surface to the zMax row of mount holes 
	$stage2->motorMountBracket->mountHolesToMainPlate->row2OffsetFromZMin = $stage2->motorMountBracket->mountHolesToMainPlate->row1OffsetFromZMin + $stage2->motorMountBracket->mountingToMainPlate->screw->clampingDiameter;
	$stage2->motorMountBracket->extentZ =  $stage2->motorMountBracket->mountHolesToMainPlate->row2OffsetFromZMin + 1/2*$stage2->motorMountBracket->mountingToMainPlate->screw->clampingDiameter;
	
}

{  //STAGE3
	$stage3->carriage->subcarriage = clone $thkHsr20Way; 
	$stage3->carriage->mountingSurfaceOffset = $stage3->carriage->subcarriage->mountingSurfaceOffset;
	$stage3->carriage->subcarriageIntervalX = $stage2->way->subwayIntervalX ;
	//In the linear bearing between stage2 and stage3, we are inverting the roles of carriage and way -- the little car-like thing is mounted on the lower-numbered stage, while the long rail-like thing is mounted to the higher-numbered stage.  Nevertheless the stage number ordering prevails, so we call the car-like thing a way and the rail-like thing a carriage.
	$stage3->box->extentZ = 18.9886811 * $inch; //confirmed
	$stage3->box->extentX = 6.75 * $inch ; //confirmed
	$stage3->box->extentY = 5.375 *$inch; //confirmed
	$stage3->box->wallThickness = 0.375 * $inch; //confirmed
	$stage3->box->motorClampPlatesIntervalZ = 4.5 * $inch;

	$stage3->carriage->extentZ = 18.48818898 * $inch ; //confirmed
	//this would make more sense: // $stage3->carriage->extentZ = $stage3->box->extentZ; 

	$stage3->carriage->subcarriage->extentZ = $stage3->carriage->extentZ;

	$stage3->pillowBlock->mountingSurfaceToLeadSrewOffset = 25.25 * $mm; //confirmed

	
	{ //VFD AND BRACKETS
		//================== integrating vfdAndBrackets into this design file =======================

		$vfd->extentX = 140 * $mm;
		$vfd->extentY = 180 * $mm;
		$vfd->extentZ = 139 * $mm;
		$vfd->baseFlangeThickness = 6 * $mm;

		$vfd->mountHoles->intervalX = 128 * $mm;
		$vfd->mountHoles->intervalY = 168 * $mm;
		$vfd->mountHoles->diameter = 5 * $mm;

		$vfdMountBracket->mountHolesToVfd->intervalY = $vfd->mountHoles->intervalY;
		$vfdMountBracket->mountHolesToVfd->distanceFromWall = (($stage3->box->extentX - 2 * $stage3->box->wallThickness)  - $vfd->mountHoles->intervalX)/2;
		$vfdMountBracket->mountHolesToVfd->diameter=5 * $mm; //FIX ME
		$vfdMountBracket->mountHolesToWall->intervalY = 140 * $mm; 
		$vfdMountBracket->mountHolesToWall->diameter = 5 * $mm; //FIX ME
		$vfdMountBracket->fastenersToWall->clampingDiameter = 15 * $mm; //dialed in

		$vfdMountBracket->angleProfile->thickness = 3.33*$mm; //measured (nominal:1/8 inch)
		$vfdMountBracket->angleProfile->armLength = 19.25 * $mm; // measured (nominal: 3/4 inch)

		$vfdMountBracket->extentX = $vfdMountBracket->angleProfile->armLength;
		$vfdMountBracket->extentY = $vfd->extentY;
		$vfdMountBracket->extentZ = $vfdMountBracket->angleProfile->armLength;



		$vfdAndBrackets->clearanceToZMinWall = 18 * $mm; 
		$vfdAndBrackets->clearanceToYMaxWall = 16 * $mm; 
	}
}

//set the extentY of stage2's waySpacer to bring the lead screw and lead nut into alignment.
$stage2->waySpacer->extentY = $stage2->leadNutBlock->mountingSurfaceToLeadSrewOffset + $stage3->pillowBlock->mountingSurfaceToLeadSrewOffset - ($stage3->carriage->mountingSurfaceOffset + $stage2->way->mountingSurfaceOffset);
$stage2->waySpacer->subwaySpacer->extentY = $stage2->waySpacer->extentY;

//cosmetic travel constraints.
$stage1->travel = 120 * $inch; //fix me
$stage2->travel = 50 * $inch; //fix me
$stage3->travel = 13 * $inch; //fix me
//unfortunately, in a distance mechanical mate, although the particular distance can be controlled parametrically, the extreme values do not seem to be paramterically controllable (At least, they do not show up in the equation editor's list of dimensions.


?>