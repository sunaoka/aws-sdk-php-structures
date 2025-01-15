<?php

namespace Sunaoka\Aws\Structures\AppMesh\CreateGatewayRoute;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $gatewayRouteName
 * @property string $meshName
 * @property string|null $meshOwner
 * @property Shapes\GatewayRouteSpec $spec
 * @property list<Shapes\TagRef>|null $tags
 * @property string $virtualGatewayName
 */
class CreateGatewayRouteRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     gatewayRouteName: string,
     *     meshName: string,
     *     meshOwner?: string|null,
     *     spec: Shapes\GatewayRouteSpec,
     *     tags?: list<Shapes\TagRef>|null,
     *     virtualGatewayName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
