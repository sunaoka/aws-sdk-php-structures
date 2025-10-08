<?php

namespace Sunaoka\Aws\Structures\ComprehendMedical\StartPHIDetectionJob;

trait StartPHIDetectionJobTrait
{
    /**
     * @param StartPHIDetectionJobRequest $args
     * @return StartPHIDetectionJobResponse
     */
    public function startPHIDetectionJob(StartPHIDetectionJobRequest $args)
    {
        $result = parent::startPHIDetectionJob($args->toArray());
        return new StartPHIDetectionJobResponse($result->toArray());
    }
}
