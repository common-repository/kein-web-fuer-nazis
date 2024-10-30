<?php
 /*
Plugin Name: Kein Web Für Nazis
Description: Fügt einen "Kein Web Für Nazis"-Banner in eurem Footer hinzu.
Version: 1.0
Author: Manuel Schwarz
Author URI: http://www.aio-websites.de

/*  Copyright 2019 Manuel Schwarz (email : manuel@aio-websites.de)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

function fckafd()
{
    wp_enqueue_style('fckafd_files', '/wp-content/plugins/keinbockaufafd/fckafd.css');
    echo "<div class='ribbon ribbon-bottom-right'><span>kein web für nazis</span></div>";

}



add_action('wp_footer', 'fckafd');
