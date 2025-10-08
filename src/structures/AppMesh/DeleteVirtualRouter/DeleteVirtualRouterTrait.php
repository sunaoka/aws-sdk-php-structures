<?php

namespace Sunaoka\Aws\Structures\AppMesh\DeleteVirtualRouter;

trait DeleteVirtualRouterTrait
{
    /**
     * @param DeleteVirtualRouterRequest $args
     * @return DeleteVirtualRouterResponse
     */
    public function deleteVirtualRouter(DeleteVirtualRouterRequest $args)
    {
        $result = parent::deleteVirtualRouter($args->toArray());
        return new DeleteVirtualRouterResponse($result->toArray());
    }
}
