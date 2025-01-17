<?php
/*
CryptOMG - A configurable CTF style test bed.
Andrew Jordan
Copyright (C) 2012 Trustwave Holdings, Inc.

This program is free software: you can redistribute it and/or modify it 
under the terms of the GNU General Public License as published by the 
Free Software Foundation, either version 3 of the License, or (at your 
option) any later version.

This program is distributed in the hope that it will be useful, but
WITHOUT ANY WARRANTY; without even the implied warranty of 
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General 
Public License for more details.

You should have received a copy of the GNU General Public License along 
with this program. If not, see <http://www.gnu.org/licenses/>.
*/


$db_name = "cryptomg";

function db () {
	$db_host = "localhost";
	$db_user = "";
	$db_pass = "";
	static $link;
	if ($link===NULL){
		$link = mysqli_connect($db_host, $db_user, $db_pass);
	}
	return $link;
}

$link = db();
if(!$link)
	die("database error");

mysqli_query($link, "CREATE DATABASE IF NOT EXISTS $db_name");
$db_select = mysqli_select_db($link, $db_name);
if(!$db_select)
	die("can't select database");


?>
