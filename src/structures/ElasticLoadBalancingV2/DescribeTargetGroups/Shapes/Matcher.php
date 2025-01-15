<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\DescribeTargetGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $HttpCode
 * @property string|null $GrpcCode
 */
class Matcher extends Shape
{
    /**
     * @param array{
     *     HttpCode?: string|null,
     *     GrpcCode?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
