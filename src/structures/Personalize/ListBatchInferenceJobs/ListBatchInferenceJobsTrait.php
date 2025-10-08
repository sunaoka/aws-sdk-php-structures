<?php

namespace Sunaoka\Aws\Structures\Personalize\ListBatchInferenceJobs;

trait ListBatchInferenceJobsTrait
{
    /**
     * @param ListBatchInferenceJobsRequest $args
     * @return ListBatchInferenceJobsResponse
     */
    public function listBatchInferenceJobs(ListBatchInferenceJobsRequest $args)
    {
        $result = parent::listBatchInferenceJobs($args->toArray());
        return new ListBatchInferenceJobsResponse($result->toArray());
    }
}
