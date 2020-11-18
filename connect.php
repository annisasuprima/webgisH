<?php
	$host = "ec2-54-166-114-48.compute-1.amazonaws.com";
	$user = "jrougkcvmbfzkb";
	$pass = "3145aaedbe875439b09693d728db589822d7f1438d0efe0ba1b163f3c0304d1d";
	$port = "5432";
	$dbname = "dff7n2oerqkms0";
	$conn = pg_connect("host=".$host." port=".$port." dbname=".$dbname." user=".$user." password=".$pass) or die("Gagal");
?>