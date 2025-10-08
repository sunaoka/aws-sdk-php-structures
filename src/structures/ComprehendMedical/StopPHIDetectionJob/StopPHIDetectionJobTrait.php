<?php

namespace Sunaoka\Aws\Structures\ComprehendMedical\StopPHIDetectionJob;

trait StopPHIDetectionJobTrait
{
    /**
     * @param StopPHIDetectionJobRequest $args
     * @return StopPHIDetectionJobResponse
     */
    public function stopPHIDetectionJob(StopPHIDetectionJobRequest $args)
    {
        $result = parent::stopPHIDetectionJob($args->toArray());
        return new StopPHIDetectionJobResponse($result->toArray());
    }
}
