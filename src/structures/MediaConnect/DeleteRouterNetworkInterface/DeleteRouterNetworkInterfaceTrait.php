<?php

namespace Sunaoka\Aws\Structures\MediaConnect\DeleteRouterNetworkInterface;

trait DeleteRouterNetworkInterfaceTrait
{
    /**
     * @param DeleteRouterNetworkInterfaceRequest $args
     * @return DeleteRouterNetworkInterfaceResponse
     */
    public function deleteRouterNetworkInterface(DeleteRouterNetworkInterfaceRequest $args)
    {
        $result = parent::deleteRouterNetworkInterface($args->toArray());
        return new DeleteRouterNetworkInterfaceResponse($result->toArray());
    }
}
