<?php

namespace Sunaoka\Aws\Structures\drs\StartRecoveryPlanExecution;

trait StartRecoveryPlanExecutionTrait
{
    /**
     * @param StartRecoveryPlanExecutionRequest $args
     * @return StartRecoveryPlanExecutionResponse
     */
    public function startRecoveryPlanExecution(StartRecoveryPlanExecutionRequest $args)
    {
        $result = parent::startRecoveryPlanExecution($args->toArray());
        return new StartRecoveryPlanExecutionResponse($result->toArray());
    }
}
