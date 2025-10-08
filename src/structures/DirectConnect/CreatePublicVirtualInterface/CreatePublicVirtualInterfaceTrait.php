<?php

namespace Sunaoka\Aws\Structures\DirectConnect\CreatePublicVirtualInterface;

trait CreatePublicVirtualInterfaceTrait
{
    /**
     * @param CreatePublicVirtualInterfaceRequest $args
     * @return CreatePublicVirtualInterfaceResponse
     */
    public function createPublicVirtualInterface(CreatePublicVirtualInterfaceRequest $args)
    {
        $result = parent::createPublicVirtualInterface($args->toArray());
        return new CreatePublicVirtualInterfaceResponse($result->toArray());
    }
}
