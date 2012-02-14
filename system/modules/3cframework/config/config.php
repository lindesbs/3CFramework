<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2012 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 * 
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  MEN AT WORK 2012 
 * @package    3cframework
 * @license    GNU/LGPL 
 * @filesource
 */

define('NEWLINE', "\n");

/**
 * Hooks
 */
// Callbacks for FileTreeMemory
$GLOBALS['TL_HOOKS']['executePreActions'][] = array('FrameworkHelper', 'executePreActions');
$GLOBALS['TL_HOOKS']['executePostActions'][] = array('FrameworkHelper', 'executePostActions');

/**
 * Form fields
 */
$GLOBALS['BE_FFL']['fileTreeMemory'] = 'FileTreeMemory';
$GLOBALS['BE_FFL']['statictext'] = 'StaticText';

if (TL_MODE == 'BE')
{
	// Include JS
	$GLOBALS['TL_JAVASCRIPT']['filetreememory'] = 'system/modules/3cframework/html/dcmemory_src.js';
}

?>