<?php

namespace Sunaoka\Aws\Structures\MediaConnect\CreateRouterNetworkInterface;

trait CreateRouterNetworkInterfaceTrait
{
    /**
     * @param CreateRouterNetworkInterfaceRequest $args
     * @return CreateRouterNetworkInterfaceResponse
     */
    public function createRouterNetworkInterface(CreateRouterNetworkInterfaceRequest $args)
    {
        $result = parent::createRouterNetworkInterface($args->toArray());
        return new CreateRouterNetworkInterfaceResponse($result->toArray());
    }
}
