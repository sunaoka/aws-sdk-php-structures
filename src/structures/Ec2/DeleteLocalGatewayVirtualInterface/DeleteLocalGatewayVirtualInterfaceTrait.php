<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteLocalGatewayVirtualInterface;

trait DeleteLocalGatewayVirtualInterfaceTrait
{
    /**
     * @param DeleteLocalGatewayVirtualInterfaceRequest $args
     * @return DeleteLocalGatewayVirtualInterfaceResponse
     */
    public function deleteLocalGatewayVirtualInterface(DeleteLocalGatewayVirtualInterfaceRequest $args)
    {
        $result = parent::deleteLocalGatewayVirtualInterface($args->toArray());
        return new DeleteLocalGatewayVirtualInterfaceResponse($result->toArray());
    }
}
