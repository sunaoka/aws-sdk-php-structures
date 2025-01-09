<?php

namespace Sunaoka\Aws\Structures\DirectConnect\CreateDirectConnectGatewayAssociation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $directConnectGatewayId
 * @property string $directConnectGatewayOwnerAccount
 * @property 'associating'|'associated'|'disassociating'|'disassociated'|'updating' $associationState
 * @property string $stateChangeError
 * @property AssociatedGateway $associatedGateway
 * @property string $associationId
 * @property list<RouteFilterPrefix> $allowedPrefixesToDirectConnectGateway
 * @property AssociatedCoreNetwork $associatedCoreNetwork
 * @property string $virtualGatewayId
 * @property string $virtualGatewayRegion
 * @property string $virtualGatewayOwnerAccount
 */
class DirectConnectGatewayAssociation extends Shape
{
    /**
     * @param array{
     *     directConnectGatewayId?: string,
     *     directConnectGatewayOwnerAccount?: string,
     *     associationState?: 'associating'|'associated'|'disassociating'|'disassociated'|'updating',
     *     stateChangeError?: string,
     *     associatedGateway?: AssociatedGateway,
     *     associationId?: string,
     *     allowedPrefixesToDirectConnectGateway?: list<RouteFilterPrefix>,
     *     associatedCoreNetwork?: AssociatedCoreNetwork,
     *     virtualGatewayId?: string,
     *     virtualGatewayRegion?: string,
     *     virtualGatewayOwnerAccount?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
