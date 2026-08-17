<?php

namespace Sunaoka\Aws\Structures\drs\ReorderRecoveryPlanSteps;

trait ReorderRecoveryPlanStepsTrait
{
    /**
     * @param ReorderRecoveryPlanStepsRequest $args
     * @return ReorderRecoveryPlanStepsResponse
     */
    public function reorderRecoveryPlanSteps(ReorderRecoveryPlanStepsRequest $args)
    {
        $result = parent::reorderRecoveryPlanSteps($args->toArray());
        return new ReorderRecoveryPlanStepsResponse($result->toArray());
    }
}
