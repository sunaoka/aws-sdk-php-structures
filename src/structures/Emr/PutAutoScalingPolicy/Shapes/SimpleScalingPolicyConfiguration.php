<?php

namespace Sunaoka\Aws\Structures\Emr\PutAutoScalingPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CHANGE_IN_CAPACITY'|'PERCENT_CHANGE_IN_CAPACITY'|'EXACT_CAPACITY'|null $AdjustmentType
 * @property int $ScalingAdjustment
 * @property int|null $CoolDown
 */
class SimpleScalingPolicyConfiguration extends Shape
{
    /**
     * @param array{
     *     AdjustmentType?: 'CHANGE_IN_CAPACITY'|'PERCENT_CHANGE_IN_CAPACITY'|'EXACT_CAPACITY'|null,
     *     ScalingAdjustment: int,
     *     CoolDown?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
