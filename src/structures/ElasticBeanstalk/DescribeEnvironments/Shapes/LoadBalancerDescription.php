<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\DescribeEnvironments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $LoadBalancerName
 * @property string $Domain
 * @property list<Listener> $Listeners
 */
class LoadBalancerDescription extends Shape
{
    /**
     * @param array{
     *     LoadBalancerName?: string,
     *     Domain?: string,
     *     Listeners?: list<Listener>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
