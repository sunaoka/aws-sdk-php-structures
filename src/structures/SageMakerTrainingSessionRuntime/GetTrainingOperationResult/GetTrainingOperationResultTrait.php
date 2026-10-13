<?php

namespace Sunaoka\Aws\Structures\SageMakerTrainingSessionRuntime\GetTrainingOperationResult;

trait GetTrainingOperationResultTrait
{
    /**
     * @param GetTrainingOperationResultRequest $args
     * @return GetTrainingOperationResultResponse
     */
    public function getTrainingOperationResult(GetTrainingOperationResultRequest $args)
    {
        $result = parent::getTrainingOperationResult($args->toArray());
        return new GetTrainingOperationResultResponse($result->toArray());
    }
}
