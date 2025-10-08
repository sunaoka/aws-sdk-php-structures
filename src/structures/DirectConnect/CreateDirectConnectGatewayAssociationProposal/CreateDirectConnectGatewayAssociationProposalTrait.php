<?php

namespace Sunaoka\Aws\Structures\DirectConnect\CreateDirectConnectGatewayAssociationProposal;

trait CreateDirectConnectGatewayAssociationProposalTrait
{
    /**
     * @param CreateDirectConnectGatewayAssociationProposalRequest $args
     * @return CreateDirectConnectGatewayAssociationProposalResponse
     */
    public function createDirectConnectGatewayAssociationProposal(
        CreateDirectConnectGatewayAssociationProposalRequest $args,
    ) {
        $result = parent::createDirectConnectGatewayAssociationProposal($args->toArray());
        return new CreateDirectConnectGatewayAssociationProposalResponse($result->toArray());
    }
}
