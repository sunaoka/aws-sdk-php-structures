<?php

namespace Sunaoka\Aws\Structures\MediaConnect\ListRouterNetworkInterfaces;

trait ListRouterNetworkInterfacesTrait
{
    /**
     * @param ListRouterNetworkInterfacesRequest $args
     * @return ListRouterNetworkInterfacesResponse
     */
    public function listRouterNetworkInterfaces(ListRouterNetworkInterfacesRequest $args)
    {
        $result = parent::listRouterNetworkInterfaces($args->toArray());
        return new ListRouterNetworkInterfacesResponse($result->toArray());
    }
}
