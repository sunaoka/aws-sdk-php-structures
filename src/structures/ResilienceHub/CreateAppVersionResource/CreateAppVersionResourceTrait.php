<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\CreateAppVersionResource;

trait CreateAppVersionResourceTrait
{
    /**
     * @param CreateAppVersionResourceRequest $args
     * @return CreateAppVersionResourceResponse
     */
    public function createAppVersionResource(CreateAppVersionResourceRequest $args)
    {
        $result = parent::createAppVersionResource($args->toArray());
        return new CreateAppVersionResourceResponse($result->toArray());
    }
}
