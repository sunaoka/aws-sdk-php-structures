<?php

namespace Sunaoka\Aws\Structures\DirectConnect\DescribeDirectConnectGatewayAssociations;

trait DescribeDirectConnectGatewayAssociationsTrait
{
    /**
     * @param DescribeDirectConnectGatewayAssociationsRequest $args
     * @return DescribeDirectConnectGatewayAssociationsResponse
     */
    public function describeDirectConnectGatewayAssociations(DescribeDirectConnectGatewayAssociationsRequest $args)
    {
        $result = parent::describeDirectConnectGatewayAssociations($args->toArray());
        return new DescribeDirectConnectGatewayAssociationsResponse($result->toArray());
    }
}
