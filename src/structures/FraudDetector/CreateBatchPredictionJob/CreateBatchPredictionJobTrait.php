<?php

namespace Sunaoka\Aws\Structures\FraudDetector\CreateBatchPredictionJob;

trait CreateBatchPredictionJobTrait
{
    /**
     * @param CreateBatchPredictionJobRequest $args
     * @return CreateBatchPredictionJobResponse
     */
    public function createBatchPredictionJob(CreateBatchPredictionJobRequest $args)
    {
        $result = parent::createBatchPredictionJob($args->toArray());
        return new CreateBatchPredictionJobResponse($result->toArray());
    }
}
