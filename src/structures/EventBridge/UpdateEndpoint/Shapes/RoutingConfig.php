<?php

namespace Sunaoka\Aws\Structures\EventBridge\UpdateEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FailoverConfig $FailoverConfig
 */
class RoutingConfig extends Shape
{
    /**
     * @param array{FailoverConfig: FailoverConfig} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
