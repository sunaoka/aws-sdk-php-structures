<?php

namespace Sunaoka\Aws\Structures\Comprehend\DescribePiiEntitiesDetectionJob;

trait DescribePiiEntitiesDetectionJobTrait
{
    /**
     * @param DescribePiiEntitiesDetectionJobRequest $args
     * @return DescribePiiEntitiesDetectionJobResponse
     */
    public function describePiiEntitiesDetectionJob(DescribePiiEntitiesDetectionJobRequest $args)
    {
        $result = parent::describePiiEntitiesDetectionJob($args->toArray());
        return new DescribePiiEntitiesDetectionJobResponse($result->toArray());
    }
}
