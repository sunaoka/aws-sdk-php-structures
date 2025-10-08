<?php

namespace Sunaoka\Aws\Structures\CleanRooms\ListProtectedJobs;

trait ListProtectedJobsTrait
{
    /**
     * @param ListProtectedJobsRequest $args
     * @return ListProtectedJobsResponse
     */
    public function listProtectedJobs(ListProtectedJobsRequest $args)
    {
        $result = parent::listProtectedJobs($args->toArray());
        return new ListProtectedJobsResponse($result->toArray());
    }
}
