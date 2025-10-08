<?php

namespace Sunaoka\Aws\Structures\FraudDetector\CancelBatchPredictionJob;

trait CancelBatchPredictionJobTrait
{
    /**
     * @param CancelBatchPredictionJobRequest $args
     * @return CancelBatchPredictionJobResponse
     */
    public function cancelBatchPredictionJob(CancelBatchPredictionJobRequest $args)
    {
        $result = parent::cancelBatchPredictionJob($args->toArray());
        return new CancelBatchPredictionJobResponse($result->toArray());
    }
}
