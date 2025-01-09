<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancing\DescribeLoadBalancers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 65535> $InstancePort
 * @property list<string> $PolicyNames
 */
class BackendServerDescription extends Shape
{
    /**
     * @param array{
     *     InstancePort?: int<1, 65535>,
     *     PolicyNames?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
