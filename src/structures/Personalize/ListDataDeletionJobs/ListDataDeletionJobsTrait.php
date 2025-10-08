<?php

namespace Sunaoka\Aws\Structures\Personalize\ListDataDeletionJobs;

trait ListDataDeletionJobsTrait
{
    /**
     * @param ListDataDeletionJobsRequest $args
     * @return ListDataDeletionJobsResponse
     */
    public function listDataDeletionJobs(ListDataDeletionJobsRequest $args)
    {
        $result = parent::listDataDeletionJobs($args->toArray());
        return new ListDataDeletionJobsResponse($result->toArray());
    }
}
