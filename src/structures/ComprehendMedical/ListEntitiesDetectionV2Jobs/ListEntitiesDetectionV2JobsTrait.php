<?php

namespace Sunaoka\Aws\Structures\ComprehendMedical\ListEntitiesDetectionV2Jobs;

trait ListEntitiesDetectionV2JobsTrait
{
    /**
     * @param ListEntitiesDetectionV2JobsRequest $args
     * @return ListEntitiesDetectionV2JobsResponse
     */
    public function listEntitiesDetectionV2Jobs(ListEntitiesDetectionV2JobsRequest $args)
    {
        $result = parent::listEntitiesDetectionV2Jobs($args->toArray());
        return new ListEntitiesDetectionV2JobsResponse($result->toArray());
    }
}
