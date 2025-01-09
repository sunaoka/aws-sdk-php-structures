<?php

namespace Sunaoka\Aws\Structures\DirectConnect\CreateDirectConnectGatewayAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $directConnectGatewayId
 * @property string $gatewayId
 * @property list<Shapes\RouteFilterPrefix> $addAllowedPrefixesToDirectConnectGateway
 * @property string $virtualGatewayId
 */
class CreateDirectConnectGatewayAssociationRequest extends Request
{
    /**
     * @param array{
     *     directConnectGatewayId: string,
     *     gatewayId?: string,
     *     addAllowedPrefixesToDirectConnectGateway?: list<Shapes\RouteFilterPrefix>,
     *     virtualGatewayId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
