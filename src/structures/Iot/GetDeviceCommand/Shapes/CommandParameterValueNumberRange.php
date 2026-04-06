<?php

namespace Sunaoka\Aws\Structures\Iot\GetDeviceCommand\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $min
 * @property string $max
 */
class CommandParameterValueNumberRange extends Shape
{
    /**
     * @param array{
     *     min: string,
     *     max: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
