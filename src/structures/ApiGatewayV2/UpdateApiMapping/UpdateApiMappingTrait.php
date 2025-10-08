<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\UpdateApiMapping;

trait UpdateApiMappingTrait
{
    /**
     * @param UpdateApiMappingRequest $args
     * @return UpdateApiMappingResponse
     */
    public function updateApiMapping(UpdateApiMappingRequest $args)
    {
        $result = parent::updateApiMapping($args->toArray());
        return new UpdateApiMappingResponse($result->toArray());
    }
}
