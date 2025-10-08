<?php

namespace Sunaoka\Aws\Structures\ApiGateway\CreateBasePathMapping;

trait CreateBasePathMappingTrait
{
    /**
     * @param CreateBasePathMappingRequest $args
     * @return CreateBasePathMappingResponse
     */
    public function createBasePathMapping(CreateBasePathMappingRequest $args)
    {
        $result = parent::createBasePathMapping($args->toArray());
        return new CreateBasePathMappingResponse($result->toArray());
    }
}
