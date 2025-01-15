<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\DescribeSSLPolicies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property int|null $Priority
 */
class Cipher extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Priority?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
