<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\DescribeSSLPolicies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property int $Priority
 */
class Cipher extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     Priority?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
