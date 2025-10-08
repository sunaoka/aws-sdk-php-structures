<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\GetApiMapping;

trait GetApiMappingTrait
{
    /**
     * @param GetApiMappingRequest $args
     * @return GetApiMappingResponse
     */
    public function getApiMapping(GetApiMappingRequest $args)
    {
        $result = parent::getApiMapping($args->toArray());
        return new GetApiMappingResponse($result->toArray());
    }
}
