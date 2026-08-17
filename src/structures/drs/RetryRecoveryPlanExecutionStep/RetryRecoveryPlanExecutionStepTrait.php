<?php

namespace Sunaoka\Aws\Structures\drs\RetryRecoveryPlanExecutionStep;

trait RetryRecoveryPlanExecutionStepTrait
{
    /**
     * @param RetryRecoveryPlanExecutionStepRequest $args
     * @return RetryRecoveryPlanExecutionStepResponse
     */
    public function retryRecoveryPlanExecutionStep(RetryRecoveryPlanExecutionStepRequest $args)
    {
        $result = parent::retryRecoveryPlanExecutionStep($args->toArray());
        return new RetryRecoveryPlanExecutionStepResponse($result->toArray());
    }
}
