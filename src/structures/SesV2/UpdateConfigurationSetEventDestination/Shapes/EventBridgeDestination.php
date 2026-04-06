<?php

namespace Sunaoka\Aws\Structures\SesV2\UpdateConfigurationSetEventDestination\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $EventBusArn
 */
class EventBridgeDestination extends Shape
{
    /**
     * @param array{EventBusArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
