<?php

namespace Sunaoka\Aws\Structures\DirectConnect\AssociateVirtualInterface;

trait AssociateVirtualInterfaceTrait
{
    /**
     * @param AssociateVirtualInterfaceRequest $args
     * @return AssociateVirtualInterfaceResponse
     */
    public function associateVirtualInterface(AssociateVirtualInterfaceRequest $args)
    {
        $result = parent::associateVirtualInterface($args->toArray());
        return new AssociateVirtualInterfaceResponse($result->toArray());
    }
}
