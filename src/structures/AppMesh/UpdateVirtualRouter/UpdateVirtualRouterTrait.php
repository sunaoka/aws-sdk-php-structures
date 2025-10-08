<?php

namespace Sunaoka\Aws\Structures\AppMesh\UpdateVirtualRouter;

trait UpdateVirtualRouterTrait
{
    /**
     * @param UpdateVirtualRouterRequest $args
     * @return UpdateVirtualRouterResponse
     */
    public function updateVirtualRouter(UpdateVirtualRouterRequest $args)
    {
        $result = parent::updateVirtualRouter($args->toArray());
        return new UpdateVirtualRouterResponse($result->toArray());
    }
}
