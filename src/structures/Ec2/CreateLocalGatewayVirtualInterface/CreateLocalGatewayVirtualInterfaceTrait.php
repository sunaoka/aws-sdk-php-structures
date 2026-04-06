<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateLocalGatewayVirtualInterface;

trait CreateLocalGatewayVirtualInterfaceTrait
{
    /**
     * @param CreateLocalGatewayVirtualInterfaceRequest $args
     * @return CreateLocalGatewayVirtualInterfaceResponse
     */
    public function createLocalGatewayVirtualInterface(CreateLocalGatewayVirtualInterfaceRequest $args)
    {
        $result = parent::createLocalGatewayVirtualInterface($args->toArray());
        return new CreateLocalGatewayVirtualInterfaceResponse($result->toArray());
    }
}
