<?php

namespace Sunaoka\Aws\Structures\ComprehendMedical\DescribePHIDetectionJob;

trait DescribePHIDetectionJobTrait
{
    /**
     * @param DescribePHIDetectionJobRequest $args
     * @return DescribePHIDetectionJobResponse
     */
    public function describePHIDetectionJob(DescribePHIDetectionJobRequest $args)
    {
        $result = parent::describePHIDetectionJob($args->toArray());
        return new DescribePHIDetectionJobResponse($result->toArray());
    }
}
