<?php

namespace Sunaoka\Aws\Structures\Comprehend\StopPiiEntitiesDetectionJob;

trait StopPiiEntitiesDetectionJobTrait
{
    /**
     * @param StopPiiEntitiesDetectionJobRequest $args
     * @return StopPiiEntitiesDetectionJobResponse
     */
    public function stopPiiEntitiesDetectionJob(StopPiiEntitiesDetectionJobRequest $args)
    {
        $result = parent::stopPiiEntitiesDetectionJob($args->toArray());
        return new StopPiiEntitiesDetectionJobResponse($result->toArray());
    }
}
