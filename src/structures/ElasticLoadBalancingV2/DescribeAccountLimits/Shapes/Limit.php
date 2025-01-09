<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\DescribeAccountLimits\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Max
 */
class Limit extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     Max?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
