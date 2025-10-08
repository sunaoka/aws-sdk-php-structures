<?php

namespace Sunaoka\Aws\Structures\DirectConnect\DescribeDirectConnectGatewayAssociationProposals;

trait DescribeDirectConnectGatewayAssociationProposalsTrait
{
    /**
     * @param DescribeDirectConnectGatewayAssociationProposalsRequest $args
     * @return DescribeDirectConnectGatewayAssociationProposalsResponse
     */
    public function describeDirectConnectGatewayAssociationProposals(DescribeDirectConnectGatewayAssociationProposalsRequest $args)
    {
        $result = parent::describeDirectConnectGatewayAssociationProposals($args->toArray());
        return new DescribeDirectConnectGatewayAssociationProposalsResponse($result->toArray());
    }
}
