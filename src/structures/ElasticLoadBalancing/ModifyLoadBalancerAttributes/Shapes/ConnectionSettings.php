<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancing\ModifyLoadBalancerAttributes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $IdleTimeout
 */
class ConnectionSettings extends Shape
{
    /**
     * @param array{IdleTimeout: int} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
