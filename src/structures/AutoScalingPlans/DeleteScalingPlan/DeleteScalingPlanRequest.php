<?php

namespace Sunaoka\Aws\Structures\AutoScalingPlans\DeleteScalingPlan;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ScalingPlanName
 * @property int $ScalingPlanVersion
 */
class DeleteScalingPlanRequest extends Request
{
    /**
     * @param array{
     *     ScalingPlanName: string,
     *     ScalingPlanVersion: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
