<?php

namespace Sunaoka\Aws\Structures\AppMesh\CreateRoute;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property string $meshName
 * @property string $meshOwner
 * @property string $routeName
 * @property Shapes\RouteSpec $spec
 * @property list<Shapes\TagRef> $tags
 * @property string $virtualRouterName
 */
class CreateRouteRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string,
     *     meshName: string,
     *     meshOwner?: string,
     *     routeName: string,
     *     spec: Shapes\RouteSpec,
     *     tags?: list<Shapes\TagRef>,
     *     virtualRouterName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
