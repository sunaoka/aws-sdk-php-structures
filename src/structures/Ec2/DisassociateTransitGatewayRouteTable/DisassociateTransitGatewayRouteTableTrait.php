<?php

namespace Sunaoka\Aws\Structures\Ec2\DisassociateTransitGatewayRouteTable;

trait DisassociateTransitGatewayRouteTableTrait
{
    /**
     * @param DisassociateTransitGatewayRouteTableRequest $args
     * @return DisassociateTransitGatewayRouteTableResponse
     */
    public function disassociateTransitGatewayRouteTable(DisassociateTransitGatewayRouteTableRequest $args)
    {
        $result = parent::disassociateTransitGatewayRouteTable($args->toArray());
        return new DisassociateTransitGatewayRouteTableResponse($result->toArray());
    }
}
