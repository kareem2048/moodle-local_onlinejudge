<?php

///////////////////////////////////////////////////////////////////////////
//                                                                       //
// NOTICE OF COPYRIGHT                                                   //
//                                                                       //
//                      Online Judge for Moodle                          //
//        https://github.com/hit-moodle/moodle-local_onlinejudge         //
//                                                                       //
// Copyright (C) 2009 onwards  Sun Zhigang  http://sunner.cn             //
//                                                                       //
// This program is free software; you can redistribute it and/or modify  //
// it under the terms of the GNU General Public License as published by  //
// the Free Software Foundation; either version 3 of the License, or     //
// (at your option) any later version.                                   //
//                                                                       //
// This program is distributed in the hope that it will be useful,       //
// but WITHOUT ANY WARRANTY; without even the implied warranty of        //
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the         //
// GNU General Public License for more details:                          //
//                                                                       //
//          http://www.gnu.org/copyleft/gpl.html                         //
//                                                                       //
///////////////////////////////////////////////////////////////////////////

/**
 * online judge home page
 *
 * @package   local_onlinejudge
 * @copyright 2011 Sun Zhigang (http://sunner.cn)
 * @author    Sun Zhigang
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once(dirname(dirname(dirname(__FILE__))).'/config.php');

$context = get_system_context();

$PAGE->set_context($context);
$PAGE->set_pagelayout('standard');
$PAGE->set_url('/local/onlinejudge/index.php');
$PAGE->set_title(get_string('pluginname', 'local_onlinejudge'));
$PAGE->set_heading("$SITE->shortname: ".get_string('pluginname', 'local_onlinejudge'));

$output = $PAGE->get_renderer('local_onlinejudge');

/// Output starts here
echo $output->header();

/// User Helper
echo $output->heading('User Helper', 1);
echo $output->heading('Basic workflow', 3);
echo $output->container('
	<ol>
		<li>Administrators install and config it.</li>
		<li>Teachers create Online Judge Assignment Activities and setup testcases etc.</li>
		<li>Students submit code in Online Judge Assignment Activities.</li>
		<li>The judge daemon judges the submissions in background.</li>
		<li>Teachers and students get judge results in Online Judge Assignment Activities.</li>
	</ol>');

echo $output->heading('Usage', 3);
echo $output->container('After installation the plugin, there will be a new assignment type called Online Judge appears in the "Add an activity..." drop down list. Simply click it and follow the inline help.');

echo $output->heading('Steps', 3);
echo $output->heading('For Teachers', 5);
echo $output->container('To create an assignment simply follow these steps:<br>');
echo $output->container('
	<ol>
		<li>Open the Course page and turn the editing on.</li>
		<li>Click on "Add an activity or resource".</li>
		<li>Choose Online Judge assignment then click add.</li>
		<li>Fill the fields and choose the desired language.</li>
		<li>Submit the assignment.</li>
	</ol>');

echo $output->heading('For Students', 5);
echo $output->container('To submit a code simply follow these steps:<br>');
echo $output->container('
	<ol>
		<li>Open the Course page.</li>
		<li>Click on the Online Judge assignment that you want to submit.</li>
		<li>Upload your submission.</li>
		<li>Wait for the judge.</li>
	</ol>');


/*
/// Judge status
if (has_capability('local/onlinejudge:viewjudgestatus', $context)) {
    echo $output->heading(get_string('status'), 1);
    echo $output->judgestatus();
}

/// My statistics
if (has_capability('local/onlinejudge:viewmystat', $context)) {
    echo $output->heading(get_string('mystat', 'local_onlinejudge'), 1);
    echo $output->mystatistics();
}
*/

/// About
echo $output->heading(get_string('about', 'local_onlinejudge'), 1);
echo $output->container(get_string('aboutcontent', 'local_onlinejudge'), 'box copyright');

echo $output->footer();

