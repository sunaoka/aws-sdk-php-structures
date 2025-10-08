<?php

namespace Sunaoka\Aws\Structures\Comprehend\ListPiiEntitiesDetectionJobs;

trait ListPiiEntitiesDetectionJobsTrait
{
    /**
     * @param ListPiiEntitiesDetectionJobsRequest $args
     * @return ListPiiEntitiesDetectionJobsResponse
     */
    public function listPiiEntitiesDetectionJobs(ListPiiEntitiesDetectionJobsRequest $args)
    {
        $result = parent::listPiiEntitiesDetectionJobs($args->toArray());
        return new ListPiiEntitiesDetectionJobsResponse($result->toArray());
    }
}
