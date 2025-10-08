<?php

namespace Sunaoka\Aws\Structures\ApiGateway\UpdateResource;

trait UpdateResourceTrait
{
    /**
     * @param UpdateResourceRequest $args
     * @return UpdateResourceResponse
     */
    public function updateResource(UpdateResourceRequest $args)
    {
        $result = parent::updateResource($args->toArray());
        return new UpdateResourceResponse($result->toArray());
    }
}
