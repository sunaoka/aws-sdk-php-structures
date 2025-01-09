<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancing\ModifyLoadBalancerAttributes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 3600> $IdleTimeout
 */
class ConnectionSettings extends Shape
{
    /**
     * @param array{IdleTimeout: int<1, 3600>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
