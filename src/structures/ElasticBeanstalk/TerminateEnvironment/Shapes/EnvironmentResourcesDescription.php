<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\TerminateEnvironment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LoadBalancerDescription $LoadBalancer
 */
class EnvironmentResourcesDescription extends Shape
{
    /**
     * @param array{LoadBalancer?: LoadBalancerDescription} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
