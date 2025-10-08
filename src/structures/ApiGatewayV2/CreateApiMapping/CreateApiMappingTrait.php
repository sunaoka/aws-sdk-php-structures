<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\CreateApiMapping;

trait CreateApiMappingTrait
{
    /**
     * @param CreateApiMappingRequest $args
     * @return CreateApiMappingResponse
     */
    public function createApiMapping(CreateApiMappingRequest $args)
    {
        $result = parent::createApiMapping($args->toArray());
        return new CreateApiMappingResponse($result->toArray());
    }
}
