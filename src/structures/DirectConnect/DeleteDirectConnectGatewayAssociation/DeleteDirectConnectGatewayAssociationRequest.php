<?php

namespace Sunaoka\Aws\Structures\DirectConnect\DeleteDirectConnectGatewayAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $associationId
 * @property string|null $directConnectGatewayId
 * @property string|null $virtualGatewayId
 */
class DeleteDirectConnectGatewayAssociationRequest extends Request
{
    /**
     * @param array{
     *     associationId?: string|null,
     *     directConnectGatewayId?: string|null,
     *     virtualGatewayId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
