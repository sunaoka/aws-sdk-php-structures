<?php

namespace Sunaoka\Aws\Structures\drs\GetRecoveryPlanExecution;

trait GetRecoveryPlanExecutionTrait
{
    /**
     * @param GetRecoveryPlanExecutionRequest $args
     * @return GetRecoveryPlanExecutionResponse
     */
    public function getRecoveryPlanExecution(GetRecoveryPlanExecutionRequest $args)
    {
        $result = parent::getRecoveryPlanExecution($args->toArray());
        return new GetRecoveryPlanExecutionResponse($result->toArray());
    }
}
