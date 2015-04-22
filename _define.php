<?php
# -- BEGIN LICENSE BLOCK ----------------------------------
# This file is part of dc2smartphone, a theme for Dotclear.
# Copyright (c) 2011-2015
# Pierre Van Glabeke
#
# Licensed under the Creative Commons license.
# A copy of this license is available at
# http://creativecommons.org/licenses/by-nc-sa/2.0/fr/
# -- END LICENSE BLOCK ------------------------------------
if (!defined('DC_RC_PATH')) { return; }

$this->registerModule(
	/* Name */			    "dc2smartphone",
	/* Description*/		"Thème pour dc2 optimisé pour les smartphones",
	/* Author */			  "Pierre Van Glabeke",
	/* Version */			  '1.3',
	array(
		'type'	 =>	'theme',
		'tplset' => 'mustek'
	)
);