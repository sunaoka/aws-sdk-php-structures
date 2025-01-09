<?php

namespace Sunaoka\Aws\Structures\Emr\AddInstanceGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CHANGE_IN_CAPACITY'|'PERCENT_CHANGE_IN_CAPACITY'|'EXACT_CAPACITY' $AdjustmentType
 * @property int $ScalingAdjustment
 * @property int $CoolDown
 */
class SimpleScalingPolicyConfiguration extends Shape
{
    /**
     * @param array{
     *     AdjustmentType?: 'CHANGE_IN_CAPACITY'|'PERCENT_CHANGE_IN_CAPACITY'|'EXACT_CAPACITY',
     *     ScalingAdjustment: int,
     *     CoolDown?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
