<?php

namespace Sunaoka\Aws\Structures\EventBridge\UpdateEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $EventBusArn
 */
class EndpointEventBus extends Shape
{
    /**
     * @param array{EventBusArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
