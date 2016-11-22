@REM |==================================================================================
@REM | This script deletes the special profile folder in the makerbot profiles directory.
@REM | This makes it convenient to overwrite it with a new profile using the "duplicate" button in the makerbot software.
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
rmdir /s /q    "%absolutePathToSpecialProfileFolder%"
@echo off

