<?php

namespace Sunaoka\Aws\Structures\MachineLearning\DeleteBatchPrediction;

trait DeleteBatchPredictionTrait
{
    /**
     * @param DeleteBatchPredictionRequest $args
     * @return DeleteBatchPredictionResponse
     */
    public function deleteBatchPrediction(DeleteBatchPredictionRequest $args)
    {
        $result = parent::deleteBatchPrediction($args->toArray());
        return new DeleteBatchPredictionResponse($result->toArray());
    }
}
