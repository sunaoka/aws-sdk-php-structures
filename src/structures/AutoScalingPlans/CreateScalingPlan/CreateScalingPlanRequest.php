<?php

namespace Sunaoka\Aws\Structures\AutoScalingPlans\CreateScalingPlan;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ScalingPlanName
 * @property Shapes\ApplicationSource $ApplicationSource
 * @property list<Shapes\ScalingInstruction> $ScalingInstructions
 */
class CreateScalingPlanRequest extends Request
{
    /**
     * @param array{
     *     ScalingPlanName: string,
     *     ApplicationSource: Shapes\ApplicationSource,
     *     ScalingInstructions: list<Shapes\ScalingInstruction>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
