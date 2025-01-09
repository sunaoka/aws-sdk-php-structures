<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\ListRemoteAccessSessions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $width
 * @property int $height
 */
class Resolution extends Shape
{
    /**
     * @param array{
     *     width?: int,
     *     height?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
