<?php

namespace Sunaoka\Aws\Structures\DirectConnect\CreatePrivateVirtualInterface;

trait CreatePrivateVirtualInterfaceTrait
{
    /**
     * @param CreatePrivateVirtualInterfaceRequest $args
     * @return CreatePrivateVirtualInterfaceResponse
     */
    public function createPrivateVirtualInterface(CreatePrivateVirtualInterfaceRequest $args)
    {
        $result = parent::createPrivateVirtualInterface($args->toArray());
        return new CreatePrivateVirtualInterfaceResponse($result->toArray());
    }
}
