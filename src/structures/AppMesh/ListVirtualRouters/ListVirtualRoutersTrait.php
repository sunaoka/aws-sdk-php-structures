<?php

namespace Sunaoka\Aws\Structures\AppMesh\ListVirtualRouters;

trait ListVirtualRoutersTrait
{
    /**
     * @param ListVirtualRoutersRequest $args
     * @return ListVirtualRoutersResponse
     */
    public function listVirtualRouters(ListVirtualRoutersRequest $args)
    {
        $result = parent::listVirtualRouters($args->toArray());
        return new ListVirtualRoutersResponse($result->toArray());
    }
}
