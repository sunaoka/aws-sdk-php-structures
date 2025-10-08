<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteLocalGatewayRouteTableVpcAssociation;

trait DeleteLocalGatewayRouteTableVpcAssociationTrait
{
    /**
     * @param DeleteLocalGatewayRouteTableVpcAssociationRequest $args
     * @return DeleteLocalGatewayRouteTableVpcAssociationResponse
     */
    public function deleteLocalGatewayRouteTableVpcAssociation(DeleteLocalGatewayRouteTableVpcAssociationRequest $args)
    {
        $result = parent::deleteLocalGatewayRouteTableVpcAssociation($args->toArray());
        return new DeleteLocalGatewayRouteTableVpcAssociationResponse($result->toArray());
    }
}
