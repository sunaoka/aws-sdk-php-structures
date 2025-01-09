<?php

namespace Sunaoka\Aws\Structures\DirectConnect\DeleteDirectConnectGatewayAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $associationId
 * @property string $directConnectGatewayId
 * @property string $virtualGatewayId
 */
class DeleteDirectConnectGatewayAssociationRequest extends Request
{
    /**
     * @param array{
     *     associationId?: string,
     *     directConnectGatewayId?: string,
     *     virtualGatewayId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
