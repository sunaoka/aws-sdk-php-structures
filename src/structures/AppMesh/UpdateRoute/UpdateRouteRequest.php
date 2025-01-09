<?php

namespace Sunaoka\Aws\Structures\AppMesh\UpdateRoute;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property string $meshName
 * @property string $meshOwner
 * @property string $routeName
 * @property Shapes\RouteSpec $spec
 * @property string $virtualRouterName
 */
class UpdateRouteRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string,
     *     meshName: string,
     *     meshOwner?: string,
     *     routeName: string,
     *     spec: Shapes\RouteSpec,
     *     virtualRouterName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
