@REM |==================================================================================
@REM | This script does the inverse of applyProfile.bat. Specifically, this 
@REM | script mirrors the contents of the special "__from_project_folder" 
@REM | folder in the working Profiles directory to the local "profile" folder. 
@REM | This is useful in the case that you use Makerware to modify the profile 
@REM | and you want to save those modifications in the local folder. Caution: 
@REM | this script overwrites whatever is in the local "profile" folder. 
@REM | 
@REM | 
@REM |    
@REM |    
@REM |==================================================================================

@echo off

set absolutePathToThisScript=%~f0
set directoryOfThisScript=%~dp0
set workingProfilesDirectory=%USERPROFILE%\My Things\Profiles\
set nameOfLocalProfileFolder=profile
set nameOfSpecialProfile=__from_project_folder

set absolutePathToSpecialProfileFolder=%workingProfilesDirectory%%nameOfSpecialProfile%
set absolutePathToLocalProfileFolder=%directoryOfThisScript%%nameOfLocalProfileFolder%
set absolutePathToReadmeFile=%absolutePathToLocalProfileFolder%\readme.txt

@echo on
robocopy    "%absolutePathToSpecialProfileFolder%" "%absolutePathToLocalProfileFolder%" /mir /xj 
@echo off

IF EXIST "%absolutePathToLocalProfileFolder%" echo The contents of this profile folder were retrieved from "%absolutePathToSpecialProfileFolder%" on %date% %time% by "%absolutePathToThisScript%". >> "%absolutePathToReadmeFile%"