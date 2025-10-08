<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\UpdateAppVersionResource;

trait UpdateAppVersionResourceTrait
{
    /**
     * @param UpdateAppVersionResourceRequest $args
     * @return UpdateAppVersionResourceResponse
     */
    public function updateAppVersionResource(UpdateAppVersionResourceRequest $args)
    {
        $result = parent::updateAppVersionResource($args->toArray());
        return new UpdateAppVersionResourceResponse($result->toArray());
    }
}
