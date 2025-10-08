<?php

namespace Sunaoka\Aws\Structures\Comprehend\StartEntitiesDetectionJob;

trait StartEntitiesDetectionJobTrait
{
    /**
     * @param StartEntitiesDetectionJobRequest $args
     * @return StartEntitiesDetectionJobResponse
     */
    public function startEntitiesDetectionJob(StartEntitiesDetectionJobRequest $args)
    {
        $result = parent::startEntitiesDetectionJob($args->toArray());
        return new StartEntitiesDetectionJobResponse($result->toArray());
    }
}
