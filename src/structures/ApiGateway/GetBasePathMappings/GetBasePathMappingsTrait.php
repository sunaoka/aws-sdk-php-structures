<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetBasePathMappings;

trait GetBasePathMappingsTrait
{
    /**
     * @param GetBasePathMappingsRequest $args
     * @return GetBasePathMappingsResponse
     */
    public function getBasePathMappings(GetBasePathMappingsRequest $args)
    {
        $result = parent::getBasePathMappings($args->toArray());
        return new GetBasePathMappingsResponse($result->toArray());
    }
}
