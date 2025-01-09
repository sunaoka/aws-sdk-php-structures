<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancing\CreateLoadBalancerPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AttributeName
 * @property string $AttributeValue
 */
class PolicyAttribute extends Shape
{
    /**
     * @param array{
     *     AttributeName?: string,
     *     AttributeValue?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
