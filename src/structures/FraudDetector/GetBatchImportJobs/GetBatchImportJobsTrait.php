<?php

namespace Sunaoka\Aws\Structures\FraudDetector\GetBatchImportJobs;

trait GetBatchImportJobsTrait
{
    /**
     * @param GetBatchImportJobsRequest $args
     * @return GetBatchImportJobsResponse
     */
    public function getBatchImportJobs(GetBatchImportJobsRequest $args)
    {
        $result = parent::getBatchImportJobs($args->toArray());
        return new GetBatchImportJobsResponse($result->toArray());
    }
}
