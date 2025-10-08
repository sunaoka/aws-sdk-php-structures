<?php

namespace Sunaoka\Aws\Structures\Personalize\ListBatchSegmentJobs;

trait ListBatchSegmentJobsTrait
{
    /**
     * @param ListBatchSegmentJobsRequest $args
     * @return ListBatchSegmentJobsResponse
     */
    public function listBatchSegmentJobs(ListBatchSegmentJobsRequest $args)
    {
        $result = parent::listBatchSegmentJobs($args->toArray());
        return new ListBatchSegmentJobsResponse($result->toArray());
    }
}
