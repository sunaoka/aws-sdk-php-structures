<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteLocalGatewayRouteTable;

trait DeleteLocalGatewayRouteTableTrait
{
    /**
     * @param DeleteLocalGatewayRouteTableRequest $args
     * @return DeleteLocalGatewayRouteTableResponse
     */
    public function deleteLocalGatewayRouteTable(DeleteLocalGatewayRouteTableRequest $args)
    {
        $result = parent::deleteLocalGatewayRouteTable($args->toArray());
        return new DeleteLocalGatewayRouteTableResponse($result->toArray());
    }
}
