<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\TerminateEnvironment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LoadBalancerDescription|null $LoadBalancer
 */
class EnvironmentResourcesDescription extends Shape
{
    /**
     * @param array{LoadBalancer?: LoadBalancerDescription|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
