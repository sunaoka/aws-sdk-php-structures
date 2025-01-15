<?php

namespace Sunaoka\Aws\Structures\DirectConnect\CreateDirectConnectGatewayAssociationProposal;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $directConnectGatewayId
 * @property string $directConnectGatewayOwnerAccount
 * @property string $gatewayId
 * @property list<Shapes\RouteFilterPrefix>|null $addAllowedPrefixesToDirectConnectGateway
 * @property list<Shapes\RouteFilterPrefix>|null $removeAllowedPrefixesToDirectConnectGateway
 */
class CreateDirectConnectGatewayAssociationProposalRequest extends Request
{
    /**
     * @param array{
     *     directConnectGatewayId: string,
     *     directConnectGatewayOwnerAccount: string,
     *     gatewayId: string,
     *     addAllowedPrefixesToDirectConnectGateway?: list<Shapes\RouteFilterPrefix>|null,
     *     removeAllowedPrefixesToDirectConnectGateway?: list<Shapes\RouteFilterPrefix>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
