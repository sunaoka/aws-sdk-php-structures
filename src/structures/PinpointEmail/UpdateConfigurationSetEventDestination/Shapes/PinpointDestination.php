<?php

namespace Sunaoka\Aws\Structures\PinpointEmail\UpdateConfigurationSetEventDestination\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ApplicationArn
 */
class PinpointDestination extends Shape
{
    /**
     * @param array{ApplicationArn?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
