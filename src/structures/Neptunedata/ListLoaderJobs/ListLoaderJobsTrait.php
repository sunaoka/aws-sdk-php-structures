<?php

namespace Sunaoka\Aws\Structures\Neptunedata\ListLoaderJobs;

trait ListLoaderJobsTrait
{
    /**
     * @param ListLoaderJobsRequest $args
     * @return ListLoaderJobsResponse
     */
    public function listLoaderJobs(ListLoaderJobsRequest $args)
    {
        $result = parent::listLoaderJobs($args->toArray());
        return new ListLoaderJobsResponse($result->toArray());
    }
}
