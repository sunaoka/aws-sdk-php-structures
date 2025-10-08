<?php

namespace Sunaoka\Aws\Structures\Comprehend\StartTopicsDetectionJob;

trait StartTopicsDetectionJobTrait
{
    /**
     * @param StartTopicsDetectionJobRequest $args
     * @return StartTopicsDetectionJobResponse
     */
    public function startTopicsDetectionJob(StartTopicsDetectionJobRequest $args)
    {
        $result = parent::startTopicsDetectionJob($args->toArray());
        return new StartTopicsDetectionJobResponse($result->toArray());
    }
}
