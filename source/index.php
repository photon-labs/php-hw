<?php /*
 * ###
 * Archetype - phresco-php-archetype
 * 
 * Copyright (C) 1999 - 2012 Photon Infotech Inc.
 * 
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 * 
 *      http://www.apache.org/licenses/LICENSE-2.0
 * 
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 * ###
 */ ?>
<?php
include "path.php";
include('config/config.php');
$currentEnv = getenv('SERVER_ENVIRONMENT');
$type = "Database";
$name = "";
$properties = getConfigByName($currentEnv, $type, $name);
$DB_TYPE = $properties[0]->type;
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Landing Page</title>
<style>
.sample
{
	margin:0 auto;
	width:80%;
	text-align:center;
	font-weight:bold;
	font-size:30px;
	padding:30% 0 35% 0;
	background-color:#480D0F;
	color:#FFFFFF;
}

html, body {
	height:100%;
	margin:0;
	padding:0;
}
</style>
</head>
<body>
<META HTTP-EQUIV=Refresh CONTENT="0; URL=public_html/index.php?DBTYPE=<?php echo $DB_TYPE; ?>">

<!--<div class="sample"><?php //header("location: public_html/index.php?DBTYPE=$DB_TYPE"); ?></div>-->
</body>
</html>
