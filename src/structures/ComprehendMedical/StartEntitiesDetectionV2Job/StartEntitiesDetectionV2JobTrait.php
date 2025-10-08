<?php

namespace Sunaoka\Aws\Structures\ComprehendMedical\StartEntitiesDetectionV2Job;

trait StartEntitiesDetectionV2JobTrait
{
    /**
     * @param StartEntitiesDetectionV2JobRequest $args
     * @return StartEntitiesDetectionV2JobResponse
     */
    public function startEntitiesDetectionV2Job(StartEntitiesDetectionV2JobRequest $args)
    {
        $result = parent::startEntitiesDetectionV2Job($args->toArray());
        return new StartEntitiesDetectionV2JobResponse($result->toArray());
    }
}
