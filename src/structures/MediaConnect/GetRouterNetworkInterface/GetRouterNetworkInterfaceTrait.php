<?php

namespace Sunaoka\Aws\Structures\MediaConnect\GetRouterNetworkInterface;

trait GetRouterNetworkInterfaceTrait
{
    /**
     * @param GetRouterNetworkInterfaceRequest $args
     * @return GetRouterNetworkInterfaceResponse
     */
    public function getRouterNetworkInterface(GetRouterNetworkInterfaceRequest $args)
    {
        $result = parent::getRouterNetworkInterface($args->toArray());
        return new GetRouterNetworkInterfaceResponse($result->toArray());
    }
}
