<?php

namespace Sunaoka\Aws\Structures\Comprehend\StopEntitiesDetectionJob;

trait StopEntitiesDetectionJobTrait
{
    /**
     * @param StopEntitiesDetectionJobRequest $args
     * @return StopEntitiesDetectionJobResponse
     */
    public function stopEntitiesDetectionJob(StopEntitiesDetectionJobRequest $args)
    {
        $result = parent::stopEntitiesDetectionJob($args->toArray());
        return new StopEntitiesDetectionJobResponse($result->toArray());
    }
}
