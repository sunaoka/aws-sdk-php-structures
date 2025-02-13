<?php

namespace Sunaoka\Aws\Structures\AppMesh\UpdateGatewayRoute;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $gatewayRouteName
 * @property string $meshName
 * @property string|null $meshOwner
 * @property Shapes\GatewayRouteSpec $spec
 * @property string $virtualGatewayName
 */
class UpdateGatewayRouteRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     gatewayRouteName: string,
     *     meshName: string,
     *     meshOwner?: string|null,
     *     spec: Shapes\GatewayRouteSpec,
     *     virtualGatewayName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
