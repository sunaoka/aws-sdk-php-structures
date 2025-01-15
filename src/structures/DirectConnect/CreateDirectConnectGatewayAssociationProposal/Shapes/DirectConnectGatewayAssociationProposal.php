<?php

namespace Sunaoka\Aws\Structures\DirectConnect\CreateDirectConnectGatewayAssociationProposal\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $proposalId
 * @property string|null $directConnectGatewayId
 * @property string|null $directConnectGatewayOwnerAccount
 * @property 'requested'|'accepted'|'deleted'|null $proposalState
 * @property AssociatedGateway|null $associatedGateway
 * @property list<RouteFilterPrefix>|null $existingAllowedPrefixesToDirectConnectGateway
 * @property list<RouteFilterPrefix>|null $requestedAllowedPrefixesToDirectConnectGateway
 */
class DirectConnectGatewayAssociationProposal extends Shape
{
    /**
     * @param array{
     *     proposalId?: string|null,
     *     directConnectGatewayId?: string|null,
     *     directConnectGatewayOwnerAccount?: string|null,
     *     proposalState?: 'requested'|'accepted'|'deleted'|null,
     *     associatedGateway?: AssociatedGateway|null,
     *     existingAllowedPrefixesToDirectConnectGateway?: list<RouteFilterPrefix>|null,
     *     requestedAllowedPrefixesToDirectConnectGateway?: list<RouteFilterPrefix>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
