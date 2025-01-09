<?php

namespace Sunaoka\Aws\Structures\DirectConnect\DeleteDirectConnectGatewayAssociationProposal;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $proposalId
 */
class DeleteDirectConnectGatewayAssociationProposalRequest extends Request
{
    /**
     * @param array{proposalId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
