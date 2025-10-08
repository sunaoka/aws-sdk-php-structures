<?php

namespace Sunaoka\Aws\Structures\Comprehend\ListTopicsDetectionJobs;

trait ListTopicsDetectionJobsTrait
{
    /**
     * @param ListTopicsDetectionJobsRequest $args
     * @return ListTopicsDetectionJobsResponse
     */
    public function listTopicsDetectionJobs(ListTopicsDetectionJobsRequest $args)
    {
        $result = parent::listTopicsDetectionJobs($args->toArray());
        return new ListTopicsDetectionJobsResponse($result->toArray());
    }
}
