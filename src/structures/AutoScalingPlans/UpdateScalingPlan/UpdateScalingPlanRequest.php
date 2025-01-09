<?php

namespace Sunaoka\Aws\Structures\AutoScalingPlans\UpdateScalingPlan;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ScalingPlanName
 * @property int $ScalingPlanVersion
 * @property Shapes\ApplicationSource $ApplicationSource
 * @property list<Shapes\ScalingInstruction> $ScalingInstructions
 */
class UpdateScalingPlanRequest extends Request
{
    /**
     * @param array{
     *     ScalingPlanName: string,
     *     ScalingPlanVersion: int,
     *     ApplicationSource?: Shapes\ApplicationSource,
     *     ScalingInstructions?: list<Shapes\ScalingInstruction>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
