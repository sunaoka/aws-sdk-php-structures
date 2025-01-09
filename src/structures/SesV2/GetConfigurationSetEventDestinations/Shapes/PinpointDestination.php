<?php

namespace Sunaoka\Aws\Structures\SesV2\GetConfigurationSetEventDestinations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ApplicationArn
 */
class PinpointDestination extends Shape
{
    /**
     * @param array{ApplicationArn?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
