<?php
/*
 ----------------------------------------------------------------------
 GLPI - Gestionnaire Libre de Parc Informatique
 Copyright (C) 2003-2008 by the INDEPNET Development Team.

 http://indepnet.net/   http://glpi-project.org/
 ----------------------------------------------------------------------

 LICENSE

	This file is part of GLPI.

    GLPI is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    GLPI is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with GLPI; if not, write to the Free Software
    Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 ------------------------------------------------------------------------
*/

// Original Author of file: Walid Nouh
// Purpose of file:
// ----------------------------------------------------------------------
class PluginGenericObjectType extends CommonDBTM{
	
    function __construct() {
    	$this->table="glpi_plugin_genericobject_types";
    	$this->type=PLUGIN_GENERICOBJECT_TYPE;
    }
  
 	function getFromDBByType($device_type)
	{
		global $DB;
		$query = "SELECT * FROM `".$this->table."` WHERE device_type=$device_type";
		$result = $DB->query($query);
		if ($DB->numrows($result) > 0)
			$this->fields = $DB->fetch_array($result);	
	}
}
?>
