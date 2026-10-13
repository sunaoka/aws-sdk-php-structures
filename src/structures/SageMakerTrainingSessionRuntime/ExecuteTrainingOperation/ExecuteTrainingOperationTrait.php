<?php

namespace Sunaoka\Aws\Structures\SageMakerTrainingSessionRuntime\ExecuteTrainingOperation;

trait ExecuteTrainingOperationTrait
{
    /**
     * @param ExecuteTrainingOperationRequest $args
     * @return ExecuteTrainingOperationResponse
     */
    public function executeTrainingOperation(ExecuteTrainingOperationRequest $args)
    {
        $result = parent::executeTrainingOperation($args->toArray());
        return new ExecuteTrainingOperationResponse($result->toArray());
    }
}
