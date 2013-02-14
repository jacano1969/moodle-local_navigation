<?php
// This file is part of Open Drako - http://opendrako.org/
//
// Open Drako is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Open Drako is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Open Drako.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Navigation lang file
 *
 * @package    local_navigation
 * @author     Open Drako Development Team
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL
 * @copyright  (C) 2013 Open Drako Corporation S.L http://www.opendrako.com
 */

// Plugin Name.
$string['pluginname'] = 'Custom Navigation';
$string['activate'] = 'Activar Custom Navigation';
$string['stractivate'] = 'Si se marca la casilla se aplicarán los cambios en el Menu de Navegación.';
$string['title'] = 'Título del conjunto de nuevas opciones';
$string['strtitle'] = 'Título que agrupará a las nuevas opciones en el Custom Navigation.';
$string['pathplugins'] = 'Path donde se ubican los plguins';
$string['strpathplugins'] = 'Dirección relativa física dónde se ubican los plugins a añadir en el menu.
<br>
Por ejemplo, /local/plugins';
$string['textlink'] = 'String a utilizar para construir el texto del enlace';
$string['strtextlink'] = 'Indicar que string se debe buscar para substituir en el
menu de navegación.
<br>
Por ejemplo, pluginname
<br>
En este caso el custom navigation construirá: $string[DIR."_pluginname"]';
$string['filelang'] = 'Nombre del plugin donde encontrar los lang';
$string['strfilelang'] = 'Nombre del plugin donde encontrar los lang en caso.
Por ejemplo: local_od

Así se montará: get_string(DIR_textlink,"filelang")';

$string['exclude'] = 'Directorio que no se han de monitorizar separados por ,:';
$string['strexclude'] = 'Indicar los directorios que se deben excluir en la monitorización
para construir el custom menu separados por comas.
<br>
Por ejemplo: .git,db,lang,lib';
$string['items'] = 'Custom Navigation items:';
$string['stritems'] = 'Se pueden añadir opciones personalizadas al menu de navegación utilizando la siguiente sintaxis.
Idéntica a la que se usa en el custom menu del Campus.
<br>
Por ejemplo:
<br>
Moodle community|http://moodle.org
<br>
-Moodle free support|http://moodle.org/support
<br>
-Moodle development|http://moodle.org/development
<br>
--Moodle Tracker|http://tracker.moodle.org
<br>
--Moodle Docs|http://docs.moodle.org
<br>
-Moodle News|http://moodle.org/news
<br>
Moodle company
<br>
-Moodle commercial hosting|http://moodle.com/hosting
<br>
-Moodle commercial support|http://moodle.com/support';
