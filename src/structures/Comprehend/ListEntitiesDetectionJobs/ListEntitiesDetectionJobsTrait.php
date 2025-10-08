<?php

namespace Sunaoka\Aws\Structures\Comprehend\ListEntitiesDetectionJobs;

trait ListEntitiesDetectionJobsTrait
{
    /**
     * @param ListEntitiesDetectionJobsRequest $args
     * @return ListEntitiesDetectionJobsResponse
     */
    public function listEntitiesDetectionJobs(ListEntitiesDetectionJobsRequest $args)
    {
        $result = parent::listEntitiesDetectionJobs($args->toArray());
        return new ListEntitiesDetectionJobsResponse($result->toArray());
    }
}
