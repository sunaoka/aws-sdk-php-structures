<?php

namespace Sunaoka\Aws\Structures\DirectConnect\AllocatePublicVirtualInterface;

trait AllocatePublicVirtualInterfaceTrait
{
    /**
     * @param AllocatePublicVirtualInterfaceRequest $args
     * @return AllocatePublicVirtualInterfaceResponse
     */
    public function allocatePublicVirtualInterface(AllocatePublicVirtualInterfaceRequest $args)
    {
        $result = parent::allocatePublicVirtualInterface($args->toArray());
        return new AllocatePublicVirtualInterfaceResponse($result->toArray());
    }
}
