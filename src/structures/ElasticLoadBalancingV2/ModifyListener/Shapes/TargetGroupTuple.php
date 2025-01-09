<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\ModifyListener\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TargetGroupArn
 * @property int $Weight
 */
class TargetGroupTuple extends Shape
{
    /**
     * @param array{
     *     TargetGroupArn?: string,
     *     Weight?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
