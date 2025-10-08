<?php

namespace Sunaoka\Aws\Structures\ComprehendMedical\StopEntitiesDetectionV2Job;

trait StopEntitiesDetectionV2JobTrait
{
    /**
     * @param StopEntitiesDetectionV2JobRequest $args
     * @return StopEntitiesDetectionV2JobResponse
     */
    public function stopEntitiesDetectionV2Job(StopEntitiesDetectionV2JobRequest $args)
    {
        $result = parent::stopEntitiesDetectionV2Job($args->toArray());
        return new StopEntitiesDetectionV2JobResponse($result->toArray());
    }
}
