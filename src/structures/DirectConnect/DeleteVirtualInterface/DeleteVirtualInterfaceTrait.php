<?php

namespace Sunaoka\Aws\Structures\DirectConnect\DeleteVirtualInterface;

trait DeleteVirtualInterfaceTrait
{
    /**
     * @param DeleteVirtualInterfaceRequest $args
     * @return DeleteVirtualInterfaceResponse
     */
    public function deleteVirtualInterface(DeleteVirtualInterfaceRequest $args)
    {
        $result = parent::deleteVirtualInterface($args->toArray());
        return new DeleteVirtualInterfaceResponse($result->toArray());
    }
}
