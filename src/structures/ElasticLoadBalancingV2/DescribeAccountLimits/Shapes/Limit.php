<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\DescribeAccountLimits\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property string|null $Max
 */
class Limit extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Max?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
