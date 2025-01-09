<?php

namespace Sunaoka\Aws\Structures\DirectConnect\CreateDirectConnectGatewayAssociationProposal\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $proposalId
 * @property string $directConnectGatewayId
 * @property string $directConnectGatewayOwnerAccount
 * @property 'requested'|'accepted'|'deleted' $proposalState
 * @property AssociatedGateway $associatedGateway
 * @property list<RouteFilterPrefix> $existingAllowedPrefixesToDirectConnectGateway
 * @property list<RouteFilterPrefix> $requestedAllowedPrefixesToDirectConnectGateway
 */
class DirectConnectGatewayAssociationProposal extends Shape
{
    /**
     * @param array{
     *     proposalId?: string,
     *     directConnectGatewayId?: string,
     *     directConnectGatewayOwnerAccount?: string,
     *     proposalState?: 'requested'|'accepted'|'deleted',
     *     associatedGateway?: AssociatedGateway,
     *     existingAllowedPrefixesToDirectConnectGateway?: list<RouteFilterPrefix>,
     *     requestedAllowedPrefixesToDirectConnectGateway?: list<RouteFilterPrefix>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
