@REM |==================================================================================
@REM |    This script replaces the contents of the working Makerbot Profiles 
@REM |    directory with the content of the "profiles" directory in the same 
@REM |    folder as this batch file. This enables us to keep the Makerbot printing 
@REM |    profile(s) used for a project in the project folder, so that the 
@REM |    profiles can evolve along with the project. This is especially useful 
@REM |    when experimenting with customizing the printing profile -- we really 
@REM |    need to keep track of the versions of the profile along with those of 
@REM |    the project. 
@REM |    
@REM |    Caution: this script permanently alters the contents of the working 
@REM |    Profiles directory 
@REM |    
@REM |    UPDATE: I just discovered that Makerware does not, as I had orginally 
@REM |    hoped and assumed, save the name of the currently selected profile along 
@REM |    with the .thing file. Therefore, I am not going to control the entire 
@REM |    contents of the working Profiles folder. Rather, this script will place 
@REM |    a symlink called "project-profile" in the working Profiles folder that 
@REM |    points to the "profile" folder in the directory of this batch file. 
@REM |    
@REM |    UPDATE: I do not like the fact that Makerware modifies the profile 
@REM |    file. Therefore, to protect my source profile, I am not going to 
@REM |    symlink, but instead simply mirror the contents of the local profile 
@REM |    folder to the special folder in the working Profiles folder. 
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
set absolutePathToReadmeFile=%absolutePathToSpecialProfileFolder%\readme.txt

@REM  @echo on
@REM  IF EXIST "%workingProfilesDirectory%%nameOfSpecialProfile%" rmdir "%workingProfilesDirectory%%nameOfSpecialProfile%"
@REM  mklink /d "%workingProfilesDirectory%%nameOfSpecialProfile%" "%directoryOfThisScript%%nameOfLocalProfileFolder%"
@REM  @echo off

@echo on
IF EXIST "%absolutePathToSpecialProfileFolder%" rmdir "%absolutePathToSpecialProfileFolder%"
robocopy   "%absolutePathToLocalProfileFolder%" "%absolutePathToSpecialProfileFolder%" /mir /xj
@echo off

echo The contents of this profile folder were automatically generated on %date% %time% by "%absolutePathToThisScript%". >> "%absolutePathToReadmeFile%"