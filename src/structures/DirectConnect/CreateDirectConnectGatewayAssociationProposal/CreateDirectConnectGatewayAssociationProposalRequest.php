<?php

namespace Sunaoka\Aws\Structures\DirectConnect\CreateDirectConnectGatewayAssociationProposal;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $directConnectGatewayId
 * @property string $directConnectGatewayOwnerAccount
 * @property string $gatewayId
 * @property list<Shapes\RouteFilterPrefix> $addAllowedPrefixesToDirectConnectGateway
 * @property list<Shapes\RouteFilterPrefix> $removeAllowedPrefixesToDirectConnectGateway
 */
class CreateDirectConnectGatewayAssociationProposalRequest extends Request
{
    /**
     * @param array{
     *     directConnectGatewayId: string,
     *     directConnectGatewayOwnerAccount: string,
     *     gatewayId: string,
     *     addAllowedPrefixesToDirectConnectGateway?: list<Shapes\RouteFilterPrefix>,
     *     removeAllowedPrefixesToDirectConnectGateway?: list<Shapes\RouteFilterPrefix>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
