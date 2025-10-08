<?php

namespace Sunaoka\Aws\Structures\MachineLearning\CreateBatchPrediction;

trait CreateBatchPredictionTrait
{
    /**
     * @param CreateBatchPredictionRequest $args
     * @return CreateBatchPredictionResponse
     */
    public function createBatchPrediction(CreateBatchPredictionRequest $args)
    {
        $result = parent::createBatchPrediction($args->toArray());
        return new CreateBatchPredictionResponse($result->toArray());
    }
}
