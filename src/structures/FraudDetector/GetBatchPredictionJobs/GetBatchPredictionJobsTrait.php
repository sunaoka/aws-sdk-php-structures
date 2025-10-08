<?php

namespace Sunaoka\Aws\Structures\FraudDetector\GetBatchPredictionJobs;

trait GetBatchPredictionJobsTrait
{
    /**
     * @param GetBatchPredictionJobsRequest $args
     * @return GetBatchPredictionJobsResponse
     */
    public function getBatchPredictionJobs(GetBatchPredictionJobsRequest $args)
    {
        $result = parent::getBatchPredictionJobs($args->toArray());
        return new GetBatchPredictionJobsResponse($result->toArray());
    }
}
