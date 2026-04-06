<?php

namespace Sunaoka\Aws\Structures\DirectConnect\AcceptDirectConnectGatewayAssociationProposal\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $directConnectGatewayId
 * @property string|null $directConnectGatewayOwnerAccount
 * @property 'associating'|'associated'|'disassociating'|'disassociated'|'updating'|null $associationState
 * @property string|null $stateChangeError
 * @property AssociatedGateway|null $associatedGateway
 * @property string|null $associationId
 * @property list<RouteFilterPrefix>|null $allowedPrefixesToDirectConnectGateway
 * @property AssociatedCoreNetwork|null $associatedCoreNetwork
 * @property string|null $virtualGatewayId
 * @property string|null $virtualGatewayRegion
 * @property string|null $virtualGatewayOwnerAccount
 */
class DirectConnectGatewayAssociation extends Shape
{
    /**
     * @param array{
     *     directConnectGatewayId?: string|null,
     *     directConnectGatewayOwnerAccount?: string|null,
     *     associationState?: 'associating'|'associated'|'disassociating'|'disassociated'|'updating'|null,
     *     stateChangeError?: string|null,
     *     associatedGateway?: AssociatedGateway|null,
     *     associationId?: string|null,
     *     allowedPrefixesToDirectConnectGateway?: list<RouteFilterPrefix>|null,
     *     associatedCoreNetwork?: AssociatedCoreNetwork|null,
     *     virtualGatewayId?: string|null,
     *     virtualGatewayRegion?: string|null,
     *     virtualGatewayOwnerAccount?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
