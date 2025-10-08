<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateLocalGatewayVirtualInterfaceGroup;

trait CreateLocalGatewayVirtualInterfaceGroupTrait
{
    /**
     * @param CreateLocalGatewayVirtualInterfaceGroupRequest $args
     * @return CreateLocalGatewayVirtualInterfaceGroupResponse
     */
    public function createLocalGatewayVirtualInterfaceGroup(CreateLocalGatewayVirtualInterfaceGroupRequest $args)
    {
        $result = parent::createLocalGatewayVirtualInterfaceGroup($args->toArray());
        return new CreateLocalGatewayVirtualInterfaceGroupResponse($result->toArray());
    }
}
