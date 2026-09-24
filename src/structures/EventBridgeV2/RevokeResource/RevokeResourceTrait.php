<?php

namespace Sunaoka\Aws\Structures\EventBridgeV2\RevokeResource;

trait RevokeResourceTrait
{
    /**
     * @param RevokeResourceRequest $args
     * @return RevokeResourceResponse
     */
    public function revokeResource(RevokeResourceRequest $args)
    {
        $result = parent::revokeResource($args->toArray());
        return new RevokeResourceResponse($result->toArray());
    }
}
