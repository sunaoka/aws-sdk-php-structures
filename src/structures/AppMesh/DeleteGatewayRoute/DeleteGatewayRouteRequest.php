<?php

namespace Sunaoka\Aws\Structures\AppMesh\DeleteGatewayRoute;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $gatewayRouteName
 * @property string $meshName
 * @property string $meshOwner
 * @property string $virtualGatewayName
 */
class DeleteGatewayRouteRequest extends Request
{
    /**
     * @param array{
     *     gatewayRouteName: string,
     *     meshName: string,
     *     meshOwner?: string,
     *     virtualGatewayName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
