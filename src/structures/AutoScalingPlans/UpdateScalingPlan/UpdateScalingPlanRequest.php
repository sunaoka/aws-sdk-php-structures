<?php

namespace Sunaoka\Aws\Structures\AutoScalingPlans\UpdateScalingPlan;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ScalingPlanName
 * @property int $ScalingPlanVersion
 * @property Shapes\ApplicationSource|null $ApplicationSource
 * @property list<Shapes\ScalingInstruction>|null $ScalingInstructions
 */
class UpdateScalingPlanRequest extends Request
{
    /**
     * @param array{
     *     ScalingPlanName: string,
     *     ScalingPlanVersion: int,
     *     ApplicationSource?: Shapes\ApplicationSource|null,
     *     ScalingInstructions?: list<Shapes\ScalingInstruction>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
