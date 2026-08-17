<?php

namespace Sunaoka\Aws\Structures\drs\UpdateRecoveryPlanStep;

trait UpdateRecoveryPlanStepTrait
{
    /**
     * @param UpdateRecoveryPlanStepRequest $args
     * @return UpdateRecoveryPlanStepResponse
     */
    public function updateRecoveryPlanStep(UpdateRecoveryPlanStepRequest $args)
    {
        $result = parent::updateRecoveryPlanStep($args->toArray());
        return new UpdateRecoveryPlanStepResponse($result->toArray());
    }
}
