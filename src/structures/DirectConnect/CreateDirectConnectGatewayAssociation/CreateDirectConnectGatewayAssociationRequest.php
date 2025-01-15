<?php

namespace Sunaoka\Aws\Structures\DirectConnect\CreateDirectConnectGatewayAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $directConnectGatewayId
 * @property string|null $gatewayId
 * @property list<Shapes\RouteFilterPrefix>|null $addAllowedPrefixesToDirectConnectGateway
 * @property string|null $virtualGatewayId
 */
class CreateDirectConnectGatewayAssociationRequest extends Request
{
    /**
     * @param array{
     *     directConnectGatewayId: string,
     *     gatewayId?: string|null,
     *     addAllowedPrefixesToDirectConnectGateway?: list<Shapes\RouteFilterPrefix>|null,
     *     virtualGatewayId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
