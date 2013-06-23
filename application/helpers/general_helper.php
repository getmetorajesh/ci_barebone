<?php
 
/**
 * Filter input based on a whitelist. This filter strips out all characters that
 * are NOT: 
 * - letters
 * - numbers
 * - Textile Markup special characters.
 * 
 * Textile markup special characters are:
 * _-.*#;:|!"+%{}@
 * 
 * This filter will also pass cyrillic characters, and characters like é and ë.
 * 
 * Typical usage:
 * $string = '_ - . * # ; : | ! " + % { } @ abcdefgABCDEFG12345 éüртхцчшщъыэюьЁуфҐ ' . "\nAnd another line!";
 * echo textile_sanitize($string);
 * 
 * @param string $string
 * @return string The sanitized string
 * @author Joost van Veen
 */
function textile_sanitize($string){
    $whitelist = '/[^a-zA-Z0-9а-яА-ЯéüртхцчшщъыэюьЁуфҐ \.\*\+\\n|#;:!"%@{} _-]/';
    return preg_replace($whitelist, '', $string);
}


function escape($str){
	return textile_sanitize($str, ENT_QUOTES,'UTF-8');
}