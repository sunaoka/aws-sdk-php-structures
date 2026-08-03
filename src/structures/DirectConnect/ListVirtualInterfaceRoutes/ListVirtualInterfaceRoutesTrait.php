<?php

namespace Sunaoka\Aws\Structures\DirectConnect\ListVirtualInterfaceRoutes;

trait ListVirtualInterfaceRoutesTrait
{
    /**
     * @param ListVirtualInterfaceRoutesRequest $args
     * @return ListVirtualInterfaceRoutesResponse
     */
    public function listVirtualInterfaceRoutes(ListVirtualInterfaceRoutesRequest $args)
    {
        $result = parent::listVirtualInterfaceRoutes($args->toArray());
        return new ListVirtualInterfaceRoutesResponse($result->toArray());
    }
}
