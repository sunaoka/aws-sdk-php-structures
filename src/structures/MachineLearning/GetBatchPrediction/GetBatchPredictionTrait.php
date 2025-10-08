<?php

namespace Sunaoka\Aws\Structures\MachineLearning\GetBatchPrediction;

trait GetBatchPredictionTrait
{
    /**
     * @param GetBatchPredictionRequest $args
     * @return GetBatchPredictionResponse
     */
    public function getBatchPrediction(GetBatchPredictionRequest $args)
    {
        $result = parent::getBatchPrediction($args->toArray());
        return new GetBatchPredictionResponse($result->toArray());
    }
}
