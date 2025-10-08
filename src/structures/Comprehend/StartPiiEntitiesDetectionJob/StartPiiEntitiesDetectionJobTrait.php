<?php

namespace Sunaoka\Aws\Structures\Comprehend\StartPiiEntitiesDetectionJob;

trait StartPiiEntitiesDetectionJobTrait
{
    /**
     * @param StartPiiEntitiesDetectionJobRequest $args
     * @return StartPiiEntitiesDetectionJobResponse
     */
    public function startPiiEntitiesDetectionJob(StartPiiEntitiesDetectionJobRequest $args)
    {
        $result = parent::startPiiEntitiesDetectionJob($args->toArray());
        return new StartPiiEntitiesDetectionJobResponse($result->toArray());
    }
}
