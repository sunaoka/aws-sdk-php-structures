<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateLocalGatewayRouteTableVpcAssociation;

trait CreateLocalGatewayRouteTableVpcAssociationTrait
{
    /**
     * @param CreateLocalGatewayRouteTableVpcAssociationRequest $args
     * @return CreateLocalGatewayRouteTableVpcAssociationResponse
     */
    public function createLocalGatewayRouteTableVpcAssociation(CreateLocalGatewayRouteTableVpcAssociationRequest $args)
    {
        $result = parent::createLocalGatewayRouteTableVpcAssociation($args->toArray());
        return new CreateLocalGatewayRouteTableVpcAssociationResponse($result->toArray());
    }
}
