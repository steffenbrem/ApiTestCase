<?php

/*
 * This file is part of the ApiTestCase package.
 *
 * (c) Lakion
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Lakion\ApiTestCase;

/**
 * @author Arkadiusz Krakowiak <arkadiusz.krakowiak@lakion.com>
 */
final class MediaTypes
{
    const JSON = 'application/json';
    const XML = 'application/xml';

    /**
     * @param string $mimeType
     *
     * @return string
     */
    static public function getType($mimeType)
    {
        $class = new \ReflectionClass(__CLASS__);
        $types = array_flip($class->getConstants());

        if (array_key_exists($mimeType, $types)) {
            return strtolower($types[$mimeType]);
        }
    }
}
