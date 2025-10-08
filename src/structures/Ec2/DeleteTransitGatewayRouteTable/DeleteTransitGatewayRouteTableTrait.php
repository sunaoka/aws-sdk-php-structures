<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteTransitGatewayRouteTable;

trait DeleteTransitGatewayRouteTableTrait
{
    /**
     * @param DeleteTransitGatewayRouteTableRequest $args
     * @return DeleteTransitGatewayRouteTableResponse
     */
    public function deleteTransitGatewayRouteTable(DeleteTransitGatewayRouteTableRequest $args)
    {
        $result = parent::deleteTransitGatewayRouteTable($args->toArray());
        return new DeleteTransitGatewayRouteTableResponse($result->toArray());
    }
}
