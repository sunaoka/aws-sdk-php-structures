<?php

namespace Sunaoka\Aws\Structures\DirectConnect\AcceptDirectConnectGatewayAssociationProposal;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $directConnectGatewayId
 * @property string $proposalId
 * @property string $associatedGatewayOwnerAccount
 * @property list<Shapes\RouteFilterPrefix>|null $overrideAllowedPrefixesToDirectConnectGateway
 */
class AcceptDirectConnectGatewayAssociationProposalRequest extends Request
{
    /**
     * @param array{
     *     directConnectGatewayId: string,
     *     proposalId: string,
     *     associatedGatewayOwnerAccount: string,
     *     overrideAllowedPrefixesToDirectConnectGateway?: list<Shapes\RouteFilterPrefix>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
