<?php

namespace Sunaoka\Aws\Structures\Comprehend\StopEventsDetectionJob;

trait StopEventsDetectionJobTrait
{
    /**
     * @param StopEventsDetectionJobRequest $args
     * @return StopEventsDetectionJobResponse
     */
    public function stopEventsDetectionJob(StopEventsDetectionJobRequest $args)
    {
        $result = parent::stopEventsDetectionJob($args->toArray());
        return new StopEventsDetectionJobResponse($result->toArray());
    }
}
