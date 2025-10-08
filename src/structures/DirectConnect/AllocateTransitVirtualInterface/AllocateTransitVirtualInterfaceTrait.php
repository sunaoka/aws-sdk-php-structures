<?php

namespace Sunaoka\Aws\Structures\DirectConnect\AllocateTransitVirtualInterface;

trait AllocateTransitVirtualInterfaceTrait
{
    /**
     * @param AllocateTransitVirtualInterfaceRequest $args
     * @return AllocateTransitVirtualInterfaceResponse
     */
    public function allocateTransitVirtualInterface(AllocateTransitVirtualInterfaceRequest $args)
    {
        $result = parent::allocateTransitVirtualInterface($args->toArray());
        return new AllocateTransitVirtualInterfaceResponse($result->toArray());
    }
}
