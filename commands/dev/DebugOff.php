<?php
/**
 * moosh - Moodle Shell
 *
 * @copyright  2012 onwards Tomasz Muras
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

class DebugOff extends MooshCommand
{
    public function __construct()
    {
        parent::__construct('off', 'debug');
    }

    public function execute()
    {
        set_config('debug','0');
        set_config('debugdisplay','0');
        set_config('debugsmtp','0');
        set_config('perfdebug','7');
        set_config('debugstringids','0');
        set_config('debugvalidators','0');
        set_config('debugpageinfo','0');
        set_config('themedesignermode','0');
    }
}
