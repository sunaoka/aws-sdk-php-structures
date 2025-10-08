<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetResource;

trait GetResourceTrait
{
    /**
     * @param GetResourceRequest $args
     * @return GetResourceResponse
     */
    public function getResource(GetResourceRequest $args)
    {
        $result = parent::getResource($args->toArray());
        return new GetResourceResponse($result->toArray());
    }
}
