<?php

namespace Sunaoka\Aws\Structures\SageMakerTrainingSessionRuntime\GetSamplingOperationResult;

trait GetSamplingOperationResultTrait
{
    /**
     * @param GetSamplingOperationResultRequest $args
     * @return GetSamplingOperationResultResponse
     */
    public function getSamplingOperationResult(GetSamplingOperationResultRequest $args)
    {
        $result = parent::getSamplingOperationResult($args->toArray());
        return new GetSamplingOperationResultResponse($result->toArray());
    }
}
