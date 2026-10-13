<?php

namespace Sunaoka\Aws\Structures\SageMakerTrainingSessionRuntime\ExecuteSamplingOperation;

trait ExecuteSamplingOperationTrait
{
    /**
     * @param ExecuteSamplingOperationRequest $args
     * @return ExecuteSamplingOperationResponse
     */
    public function executeSamplingOperation(ExecuteSamplingOperationRequest $args)
    {
        $result = parent::executeSamplingOperation($args->toArray());
        return new ExecuteSamplingOperationResponse($result->toArray());
    }
}
