<?php

namespace Sunaoka\Aws\Structures\Ec2\AssociateRouteTable;

trait AssociateRouteTableTrait
{
    /**
     * @param AssociateRouteTableRequest $args
     * @return AssociateRouteTableResponse
     */
    public function associateRouteTable(AssociateRouteTableRequest $args)
    {
        $result = parent::associateRouteTable($args->toArray());
        return new AssociateRouteTableResponse($result->toArray());
    }
}
