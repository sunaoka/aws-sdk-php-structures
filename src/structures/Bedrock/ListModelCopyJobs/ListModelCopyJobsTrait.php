<?php

namespace Sunaoka\Aws\Structures\Bedrock\ListModelCopyJobs;

trait ListModelCopyJobsTrait
{
    /**
     * @param ListModelCopyJobsRequest $args
     * @return ListModelCopyJobsResponse
     */
    public function listModelCopyJobs(ListModelCopyJobsRequest $args)
    {
        $result = parent::listModelCopyJobs($args->toArray());
        return new ListModelCopyJobsResponse($result->toArray());
    }
}
