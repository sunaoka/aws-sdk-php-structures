<?php

namespace Sunaoka\Aws\Structures\drs\DeleteRecoveryPlanStep;

trait DeleteRecoveryPlanStepTrait
{
    /**
     * @param DeleteRecoveryPlanStepRequest $args
     * @return DeleteRecoveryPlanStepResponse
     */
    public function deleteRecoveryPlanStep(DeleteRecoveryPlanStepRequest $args)
    {
        $result = parent::deleteRecoveryPlanStep($args->toArray());
        return new DeleteRecoveryPlanStepResponse($result->toArray());
    }
}
