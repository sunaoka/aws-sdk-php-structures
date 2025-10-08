<?php

namespace Sunaoka\Aws\Structures\Ec2\AssociateTransitGatewayRouteTable;

trait AssociateTransitGatewayRouteTableTrait
{
    /**
     * @param AssociateTransitGatewayRouteTableRequest $args
     * @return AssociateTransitGatewayRouteTableResponse
     */
    public function associateTransitGatewayRouteTable(AssociateTransitGatewayRouteTableRequest $args)
    {
        $result = parent::associateTransitGatewayRouteTable($args->toArray());
        return new AssociateTransitGatewayRouteTableResponse($result->toArray());
    }
}
