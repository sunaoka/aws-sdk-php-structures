<?php

namespace Sunaoka\Aws\Structures\drs\UpdateRecoveryPlanExecutionStep;

trait UpdateRecoveryPlanExecutionStepTrait
{
    /**
     * @param UpdateRecoveryPlanExecutionStepRequest $args
     * @return UpdateRecoveryPlanExecutionStepResponse
     */
    public function updateRecoveryPlanExecutionStep(UpdateRecoveryPlanExecutionStepRequest $args)
    {
        $result = parent::updateRecoveryPlanExecutionStep($args->toArray());
        return new UpdateRecoveryPlanExecutionStepResponse($result->toArray());
    }
}
