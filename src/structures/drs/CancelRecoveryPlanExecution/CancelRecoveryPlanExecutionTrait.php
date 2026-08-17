<?php

namespace Sunaoka\Aws\Structures\drs\CancelRecoveryPlanExecution;

trait CancelRecoveryPlanExecutionTrait
{
    /**
     * @param CancelRecoveryPlanExecutionRequest $args
     * @return CancelRecoveryPlanExecutionResponse
     */
    public function cancelRecoveryPlanExecution(CancelRecoveryPlanExecutionRequest $args)
    {
        $result = parent::cancelRecoveryPlanExecution($args->toArray());
        return new CancelRecoveryPlanExecutionResponse($result->toArray());
    }
}
