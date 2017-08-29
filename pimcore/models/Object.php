<?php
/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Enterprise License (PEL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 * @category   Pimcore
 * @package    Asset
 *
 * @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 * @license    http://www.pimcore.org/license     GPLv3 and PEL
 */

namespace {
    if (version_compare(PHP_VERSION, '7.2.0', '<')) {
        // this is just an alias ;-)
        class_alias('Pimcore\\Model\\CustomObject\\AbstractObject', 'Pimcore\\Model\\Object');
    }
}

// the following is for IDEs to support auto-complete

namespace Pimcore\Model {
    if (version_compare(PHP_VERSION, '7.2.0', '<')) {
        if (!\Pimcore\Tool::classExists('Pimcore\\Model\\Object')) {
            class Object extends \Pimcore\Model\CustomObject\AbstractObject
            {
            }
        }
    }
}
