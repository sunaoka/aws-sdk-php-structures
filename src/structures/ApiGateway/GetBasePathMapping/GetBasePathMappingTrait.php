<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetBasePathMapping;

trait GetBasePathMappingTrait
{
    /**
     * @param GetBasePathMappingRequest $args
     * @return GetBasePathMappingResponse
     */
    public function getBasePathMapping(GetBasePathMappingRequest $args)
    {
        $result = parent::getBasePathMapping($args->toArray());
        return new GetBasePathMappingResponse($result->toArray());
    }
}
