<?php

namespace Sunaoka\Aws\Structures\GameLiftStreams\GetStreamSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<320, 4096> $Width
 * @property int<320, 4096> $Height
 */
class Resolution extends Shape
{
    /**
     * @param array{
     *     Width: int<320, 4096>,
     *     Height: int<320, 4096>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
