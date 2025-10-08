<?php

namespace Sunaoka\Aws\Structures\MachineLearning\UpdateBatchPrediction;

trait UpdateBatchPredictionTrait
{
    /**
     * @param UpdateBatchPredictionRequest $args
     * @return UpdateBatchPredictionResponse
     */
    public function updateBatchPrediction(UpdateBatchPredictionRequest $args)
    {
        $result = parent::updateBatchPrediction($args->toArray());
        return new UpdateBatchPredictionResponse($result->toArray());
    }
}
