<?php

namespace Sunaoka\Aws\Structures\Deadline\SearchJobs;

trait SearchJobsTrait
{
    /**
     * @param SearchJobsRequest $args
     * @return SearchJobsResponse
     */
    public function searchJobs(SearchJobsRequest $args)
    {
        $result = parent::searchJobs($args->toArray());
        return new SearchJobsResponse($result->toArray());
    }
}
