<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancing\DescribeLoadBalancers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 65535>|null $InstancePort
 * @property list<string>|null $PolicyNames
 */
class BackendServerDescription extends Shape
{
    /**
     * @param array{
     *     InstancePort?: int<1, 65535>|null,
     *     PolicyNames?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
