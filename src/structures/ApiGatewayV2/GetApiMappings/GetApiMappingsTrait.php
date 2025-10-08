<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\GetApiMappings;

trait GetApiMappingsTrait
{
    /**
     * @param GetApiMappingsRequest $args
     * @return GetApiMappingsResponse
     */
    public function getApiMappings(GetApiMappingsRequest $args)
    {
        $result = parent::getApiMappings($args->toArray());
        return new GetApiMappingsResponse($result->toArray());
    }
}
