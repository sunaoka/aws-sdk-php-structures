<?php

namespace Sunaoka\Aws\Structures\Bedrock\ListModelImportJobs;

trait ListModelImportJobsTrait
{
    /**
     * @param ListModelImportJobsRequest $args
     * @return ListModelImportJobsResponse
     */
    public function listModelImportJobs(ListModelImportJobsRequest $args)
    {
        $result = parent::listModelImportJobs($args->toArray());
        return new ListModelImportJobsResponse($result->toArray());
    }
}
