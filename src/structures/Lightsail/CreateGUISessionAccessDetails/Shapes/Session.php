<?php

namespace Sunaoka\Aws\Structures\Lightsail\CreateGUISessionAccessDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $url
 * @property bool $isPrimary
 */
class Session extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     url?: string,
     *     isPrimary?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
