<?php

namespace Sunaoka\Aws\Structures\FraudDetector\DeleteBatchPredictionJob;

trait DeleteBatchPredictionJobTrait
{
    /**
     * @param DeleteBatchPredictionJobRequest $args
     * @return DeleteBatchPredictionJobResponse
     */
    public function deleteBatchPredictionJob(DeleteBatchPredictionJobRequest $args)
    {
        $result = parent::deleteBatchPredictionJob($args->toArray());
        return new DeleteBatchPredictionJobResponse($result->toArray());
    }
}
