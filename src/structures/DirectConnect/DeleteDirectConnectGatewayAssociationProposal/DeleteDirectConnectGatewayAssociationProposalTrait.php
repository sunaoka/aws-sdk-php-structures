<?php

namespace Sunaoka\Aws\Structures\DirectConnect\DeleteDirectConnectGatewayAssociationProposal;

trait DeleteDirectConnectGatewayAssociationProposalTrait
{
    /**
     * @param DeleteDirectConnectGatewayAssociationProposalRequest $args
     * @return DeleteDirectConnectGatewayAssociationProposalResponse
     */
    public function deleteDirectConnectGatewayAssociationProposal(DeleteDirectConnectGatewayAssociationProposalRequest $args)
    {
        $result = parent::deleteDirectConnectGatewayAssociationProposal($args->toArray());
        return new DeleteDirectConnectGatewayAssociationProposalResponse($result->toArray());
    }
}
