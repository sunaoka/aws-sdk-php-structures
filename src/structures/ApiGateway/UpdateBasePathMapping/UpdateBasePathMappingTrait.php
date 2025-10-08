<?php

namespace Sunaoka\Aws\Structures\ApiGateway\UpdateBasePathMapping;

trait UpdateBasePathMappingTrait
{
    /**
     * @param UpdateBasePathMappingRequest $args
     * @return UpdateBasePathMappingResponse
     */
    public function updateBasePathMapping(UpdateBasePathMappingRequest $args)
    {
        $result = parent::updateBasePathMapping($args->toArray());
        return new UpdateBasePathMappingResponse($result->toArray());
    }
}
