<?php

namespace Sunaoka\Aws\Structures\DirectConnect\UpdateDirectConnectGatewayAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $associationId
 * @property list<Shapes\RouteFilterPrefix> $addAllowedPrefixesToDirectConnectGateway
 * @property list<Shapes\RouteFilterPrefix> $removeAllowedPrefixesToDirectConnectGateway
 */
class UpdateDirectConnectGatewayAssociationRequest extends Request
{
    /**
     * @param array{
     *     associationId?: string,
     *     addAllowedPrefixesToDirectConnectGateway?: list<Shapes\RouteFilterPrefix>,
     *     removeAllowedPrefixesToDirectConnectGateway?: list<Shapes\RouteFilterPrefix>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
