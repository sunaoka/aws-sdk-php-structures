<?php

namespace Sunaoka\Aws\Structures\DirectConnect\AllocatePrivateVirtualInterface;

trait AllocatePrivateVirtualInterfaceTrait
{
    /**
     * @param AllocatePrivateVirtualInterfaceRequest $args
     * @return AllocatePrivateVirtualInterfaceResponse
     */
    public function allocatePrivateVirtualInterface(AllocatePrivateVirtualInterfaceRequest $args)
    {
        $result = parent::allocatePrivateVirtualInterface($args->toArray());
        return new AllocatePrivateVirtualInterfaceResponse($result->toArray());
    }
}
