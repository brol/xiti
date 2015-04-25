<?php
# -- BEGIN LICENSE BLOCK ----------------------------------
# This file is part of xiti, a plugin for Dotclear 2.
# 
# Copyright (c) 2009-2015 JC Denis and contributors
# 
# Licensed under the GPL version 2.0 license.
# A copy of this license is available in LICENSE file or at
# http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
# -- END LICENSE BLOCK ------------------------------------

if (!defined('DC_RC_PATH')){return;}
$this->registerModule(
	/* Name */			"xiti",
	/* Description*/		"Add XITI marker to your blog",
	/* Author */		"Jean-Christian Denis, Pierre Van Glabeke",
	/* Version */		'0.6',
	/* Properties */
	array(
		'permissions' => 'admin',
		'type' => 'plugin',
		'dc_min' => '2.7',
		'support' => 'http://forum.dotclear.org/viewtopic.php?pid=333004#p333004',
		'details' => 'http://plugins.dotaddict.org/dc2/details/xiti'
		)
);