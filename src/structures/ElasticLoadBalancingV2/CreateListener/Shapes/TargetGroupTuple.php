<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\CreateListener\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TargetGroupArn
 * @property int|null $Weight
 */
class TargetGroupTuple extends Shape
{
    /**
     * @param array{
     *     TargetGroupArn?: string|null,
     *     Weight?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
