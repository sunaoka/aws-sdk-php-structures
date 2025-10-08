<?php

namespace Sunaoka\Aws\Structures\DirectConnect\ConfirmTransitVirtualInterface;

trait ConfirmTransitVirtualInterfaceTrait
{
    /**
     * @param ConfirmTransitVirtualInterfaceRequest $args
     * @return ConfirmTransitVirtualInterfaceResponse
     */
    public function confirmTransitVirtualInterface(ConfirmTransitVirtualInterfaceRequest $args)
    {
        $result = parent::confirmTransitVirtualInterface($args->toArray());
        return new ConfirmTransitVirtualInterfaceResponse($result->toArray());
    }
}
