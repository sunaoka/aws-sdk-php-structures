<?php

namespace Sunaoka\Aws\Structures\DirectConnect\AcceptDirectConnectGatewayAssociationProposal;

trait AcceptDirectConnectGatewayAssociationProposalTrait
{
    /**
     * @param AcceptDirectConnectGatewayAssociationProposalRequest $args
     * @return AcceptDirectConnectGatewayAssociationProposalResponse
     */
    public function acceptDirectConnectGatewayAssociationProposal(AcceptDirectConnectGatewayAssociationProposalRequest $args)
    {
        $result = parent::acceptDirectConnectGatewayAssociationProposal($args->toArray());
        return new AcceptDirectConnectGatewayAssociationProposalResponse($result->toArray());
    }
}
