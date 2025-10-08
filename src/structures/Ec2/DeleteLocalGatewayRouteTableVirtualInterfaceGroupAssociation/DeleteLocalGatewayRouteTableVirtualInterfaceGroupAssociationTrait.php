<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteLocalGatewayRouteTableVirtualInterfaceGroupAssociation;

trait DeleteLocalGatewayRouteTableVirtualInterfaceGroupAssociationTrait
{
    /**
     * @param DeleteLocalGatewayRouteTableVirtualInterfaceGroupAssociationRequest $args
     * @return DeleteLocalGatewayRouteTableVirtualInterfaceGroupAssociationResponse
     */
    public function deleteLocalGatewayRouteTableVirtualInterfaceGroupAssociation(DeleteLocalGatewayRouteTableVirtualInterfaceGroupAssociationRequest $args)
    {
        $result = parent::deleteLocalGatewayRouteTableVirtualInterfaceGroupAssociation($args->toArray());
        return new DeleteLocalGatewayRouteTableVirtualInterfaceGroupAssociationResponse($result->toArray());
    }
}
