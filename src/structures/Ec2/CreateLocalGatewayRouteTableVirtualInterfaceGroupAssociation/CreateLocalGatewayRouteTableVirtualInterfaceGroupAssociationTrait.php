<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateLocalGatewayRouteTableVirtualInterfaceGroupAssociation;

trait CreateLocalGatewayRouteTableVirtualInterfaceGroupAssociationTrait
{
    /**
     * @param CreateLocalGatewayRouteTableVirtualInterfaceGroupAssociationRequest $args
     * @return CreateLocalGatewayRouteTableVirtualInterfaceGroupAssociationResponse
     */
    public function createLocalGatewayRouteTableVirtualInterfaceGroupAssociation(CreateLocalGatewayRouteTableVirtualInterfaceGroupAssociationRequest $args)
    {
        $result = parent::createLocalGatewayRouteTableVirtualInterfaceGroupAssociation($args->toArray());
        return new CreateLocalGatewayRouteTableVirtualInterfaceGroupAssociationResponse($result->toArray());
    }
}
