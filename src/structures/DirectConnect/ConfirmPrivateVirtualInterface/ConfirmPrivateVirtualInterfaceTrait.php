<?php

namespace Sunaoka\Aws\Structures\DirectConnect\ConfirmPrivateVirtualInterface;

trait ConfirmPrivateVirtualInterfaceTrait
{
    /**
     * @param ConfirmPrivateVirtualInterfaceRequest $args
     * @return ConfirmPrivateVirtualInterfaceResponse
     */
    public function confirmPrivateVirtualInterface(ConfirmPrivateVirtualInterfaceRequest $args)
    {
        $result = parent::confirmPrivateVirtualInterface($args->toArray());
        return new ConfirmPrivateVirtualInterfaceResponse($result->toArray());
    }
}
