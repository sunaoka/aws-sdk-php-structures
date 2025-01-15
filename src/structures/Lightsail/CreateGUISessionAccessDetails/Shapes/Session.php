<?php

namespace Sunaoka\Aws\Structures\Lightsail\CreateGUISessionAccessDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property string|null $url
 * @property bool|null $isPrimary
 */
class Session extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     url?: string|null,
     *     isPrimary?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
