<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\DescribeTargetGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $HttpCode
 * @property string $GrpcCode
 */
class Matcher extends Shape
{
    /**
     * @param array{
     *     HttpCode?: string,
     *     GrpcCode?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
