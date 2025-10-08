<?php

namespace Sunaoka\Aws\Structures\AppMesh\CreateVirtualRouter;

trait CreateVirtualRouterTrait
{
    /**
     * @param CreateVirtualRouterRequest $args
     * @return CreateVirtualRouterResponse
     */
    public function createVirtualRouter(CreateVirtualRouterRequest $args)
    {
        $result = parent::createVirtualRouter($args->toArray());
        return new CreateVirtualRouterResponse($result->toArray());
    }
}
