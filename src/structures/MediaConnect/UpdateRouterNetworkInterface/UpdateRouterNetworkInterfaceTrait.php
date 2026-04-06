<?php

namespace Sunaoka\Aws\Structures\MediaConnect\UpdateRouterNetworkInterface;

trait UpdateRouterNetworkInterfaceTrait
{
    /**
     * @param UpdateRouterNetworkInterfaceRequest $args
     * @return UpdateRouterNetworkInterfaceResponse
     */
    public function updateRouterNetworkInterface(UpdateRouterNetworkInterfaceRequest $args)
    {
        $result = parent::updateRouterNetworkInterface($args->toArray());
        return new UpdateRouterNetworkInterfaceResponse($result->toArray());
    }
}
