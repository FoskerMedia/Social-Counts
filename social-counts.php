<?php
/*
Plugin Name: Social Counts
Plugin URI: https://github.com/humanmade/Social-Counts
Description: Adds the # of times a post has been shared on major social networks as post meta.
Version: 1.0
Author: Human Made
Author URI: http://hmn.md/
License: GPL2

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License, version 2, as 
published by the Free Software Foundation.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit on Direct Access
}
	
require_once( 'class.hm-social-counts.php' );