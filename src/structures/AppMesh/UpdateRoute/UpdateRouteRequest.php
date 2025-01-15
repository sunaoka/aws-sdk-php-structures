<?php

namespace Sunaoka\Aws\Structures\AppMesh\UpdateRoute;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $meshName
 * @property string|null $meshOwner
 * @property string $routeName
 * @property Shapes\RouteSpec $spec
 * @property string $virtualRouterName
 */
class UpdateRouteRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     meshName: string,
     *     meshOwner?: string|null,
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
