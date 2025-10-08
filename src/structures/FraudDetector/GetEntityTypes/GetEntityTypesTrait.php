<?php

namespace Sunaoka\Aws\Structures\FraudDetector\GetEntityTypes;

trait GetEntityTypesTrait
{
    /**
     * @param GetEntityTypesRequest $args
     * @return GetEntityTypesResponse
     */
    public function getEntityTypes(GetEntityTypesRequest $args)
    {
        $result = parent::getEntityTypes($args->toArray());
        return new GetEntityTypesResponse($result->toArray());
    }
}
