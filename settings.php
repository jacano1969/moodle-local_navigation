<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Add new optios in Navigation Menu
 *
 * @package    local_navigation
 * @author		cescobedo@cvaconsulting.com
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

if ($hassiteconfig) {
    // Add general config.
    $temp = new admin_settingpage('configcm', get_string('pluginname', 'local_navigation'));
    $temp->add(new admin_setting_configcheckbox('cm_activate', get_string('activate', 'local_navigation'),
        get_string('stractivate', 'local_navigation'), 0));
    $temp->add(new admin_setting_configtext('cm_pathplugins', get_string('pathplugins', 'local_navigation'),
        get_string('strpathplugins', 'local_navigation'), '/local/od'));
    $temp->add(new admin_setting_configtext('cm_title', get_string('title', 'local_navigation'),
        get_string('strtitle', 'local_navigation'), 'Custom Navigation'));
    $temp->add(new admin_setting_configtext('cm_textlink', get_string('textlink', 'local_navigation'),
        get_string('strtextlink', 'local_navigation'), 'pluginname'));
    $temp->add(new admin_setting_configtext('cm_filelang', get_string('filelang', 'local_navigation'),
        get_string('strfilelang', 'local_navigation'), 'local_od'));
    $temp->add(new admin_setting_configtext('cm_exclude', get_string('exclude', 'local_navigation'),
        get_string('strexclude', 'local_navigation'), '.git,db,lang,lib'));
    $temp->add(new admin_setting_configtextarea('cm_items', new lang_string('items', 'local_navigation'),
        new lang_string('stritems', 'local_navigation'), '', PARAM_TEXT, '50', '10'));

    $ADMIN->add('localplugins', $temp);
}