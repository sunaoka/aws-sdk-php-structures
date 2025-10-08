<?php

namespace Sunaoka\Aws\Structures\Comprehend\StartEventsDetectionJob;

trait StartEventsDetectionJobTrait
{
    /**
     * @param StartEventsDetectionJobRequest $args
     * @return StartEventsDetectionJobResponse
     */
    public function startEventsDetectionJob(StartEventsDetectionJobRequest $args)
    {
        $result = parent::startEventsDetectionJob($args->toArray());
        return new StartEventsDetectionJobResponse($result->toArray());
    }
}
