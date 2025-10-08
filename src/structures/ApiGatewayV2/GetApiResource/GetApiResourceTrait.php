<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\GetApiResource;

trait GetApiResourceTrait
{
    /**
     * @param GetApiResourceRequest $args
     * @return GetApiResourceResponse
     */
    public function getApiResource(GetApiResourceRequest $args)
    {
        $result = parent::getApiResource($args->toArray());
        return new GetApiResourceResponse($result->toArray());
    }
}
