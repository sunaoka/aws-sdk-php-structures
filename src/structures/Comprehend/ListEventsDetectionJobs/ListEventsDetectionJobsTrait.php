<?php

namespace Sunaoka\Aws\Structures\Comprehend\ListEventsDetectionJobs;

trait ListEventsDetectionJobsTrait
{
    /**
     * @param ListEventsDetectionJobsRequest $args
     * @return ListEventsDetectionJobsResponse
     */
    public function listEventsDetectionJobs(ListEventsDetectionJobsRequest $args)
    {
        $result = parent::listEventsDetectionJobs($args->toArray());
        return new ListEventsDetectionJobsResponse($result->toArray());
    }
}
