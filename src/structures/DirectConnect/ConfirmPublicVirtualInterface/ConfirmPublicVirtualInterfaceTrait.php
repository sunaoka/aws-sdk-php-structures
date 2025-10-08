<?php

namespace Sunaoka\Aws\Structures\DirectConnect\ConfirmPublicVirtualInterface;

trait ConfirmPublicVirtualInterfaceTrait
{
    /**
     * @param ConfirmPublicVirtualInterfaceRequest $args
     * @return ConfirmPublicVirtualInterfaceResponse
     */
    public function confirmPublicVirtualInterface(ConfirmPublicVirtualInterfaceRequest $args)
    {
        $result = parent::confirmPublicVirtualInterface($args->toArray());
        return new ConfirmPublicVirtualInterfaceResponse($result->toArray());
    }
}
