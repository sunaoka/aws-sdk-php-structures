<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteLocalGatewayVirtualInterfaceGroup;

trait DeleteLocalGatewayVirtualInterfaceGroupTrait
{
    /**
     * @param DeleteLocalGatewayVirtualInterfaceGroupRequest $args
     * @return DeleteLocalGatewayVirtualInterfaceGroupResponse
     */
    public function deleteLocalGatewayVirtualInterfaceGroup(DeleteLocalGatewayVirtualInterfaceGroupRequest $args)
    {
        $result = parent::deleteLocalGatewayVirtualInterfaceGroup($args->toArray());
        return new DeleteLocalGatewayVirtualInterfaceGroupResponse($result->toArray());
    }
}
