<?php

require_once 'vendor/autoload.php';
//require_once('CharacterTypeLexer.php');
require('CharacterTypeLexer.php');
require('UpperCaseCharacterExtracter.php');
//include('CharacterTypeLexer.php');
//include_once('CharacterTypeLexer.php');



$upperCaseCharacterExtractor = new UpperCaseCharacterExtracter(new CharacterTypeLexer());
$upperCaseCharacters = $upperCaseCharacterExtractor->getUpperCaseCharacters('1aBcdEfgHiJ12');

print_r($upperCaseCharacters);
