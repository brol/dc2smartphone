<?php
/**
 * @brief dc2smartphone, a theme for Dotclear 2
 *
 * @package Dotclear
 * @subpackage Theme
 *
 * @author Pierre Van Glabeke
 * @copyright http://creativecommons.org/licenses/by-nc-sa/2.0/fr/
 */
if (!defined('DC_RC_PATH')) { return; }

$this->registerModule(
    'dc2smartphone',
    'Mobile theme',
    'Pierre Van Glabeke',
    '1.4-dev',
    [
        'requires' => [['core', '2.24']],
        'type'     => 'theme',
        'tplset'   => 'mustek',
    ]
);
