<?php

namespace Sunaoka\Aws\Structures\AppMesh\CreateGatewayRoute;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property string $gatewayRouteName
 * @property string $meshName
 * @property string $meshOwner
 * @property Shapes\GatewayRouteSpec $spec
 * @property list<Shapes\TagRef> $tags
 * @property string $virtualGatewayName
 */
class CreateGatewayRouteRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string,
     *     gatewayRouteName: string,
     *     meshName: string,
     *     meshOwner?: string,
     *     spec: Shapes\GatewayRouteSpec,
     *     tags?: list<Shapes\TagRef>,
     *     virtualGatewayName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
