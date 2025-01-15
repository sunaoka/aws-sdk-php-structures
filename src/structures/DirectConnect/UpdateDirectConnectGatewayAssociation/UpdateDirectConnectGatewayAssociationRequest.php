<?php

namespace Sunaoka\Aws\Structures\DirectConnect\UpdateDirectConnectGatewayAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $associationId
 * @property list<Shapes\RouteFilterPrefix>|null $addAllowedPrefixesToDirectConnectGateway
 * @property list<Shapes\RouteFilterPrefix>|null $removeAllowedPrefixesToDirectConnectGateway
 */
class UpdateDirectConnectGatewayAssociationRequest extends Request
{
    /**
     * @param array{
     *     associationId?: string|null,
     *     addAllowedPrefixesToDirectConnectGateway?: list<Shapes\RouteFilterPrefix>|null,
     *     removeAllowedPrefixesToDirectConnectGateway?: list<Shapes\RouteFilterPrefix>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
