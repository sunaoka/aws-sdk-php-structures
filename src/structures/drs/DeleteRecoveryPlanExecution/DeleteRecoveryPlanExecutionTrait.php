<?php

namespace Sunaoka\Aws\Structures\drs\DeleteRecoveryPlanExecution;

trait DeleteRecoveryPlanExecutionTrait
{
    /**
     * @param DeleteRecoveryPlanExecutionRequest $args
     * @return DeleteRecoveryPlanExecutionResponse
     */
    public function deleteRecoveryPlanExecution(DeleteRecoveryPlanExecutionRequest $args)
    {
        $result = parent::deleteRecoveryPlanExecution($args->toArray());
        return new DeleteRecoveryPlanExecutionResponse($result->toArray());
    }
}
