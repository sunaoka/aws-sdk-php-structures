<?php

namespace Sunaoka\Aws\Structures\AppMesh\CreateRoute;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $meshName
 * @property string|null $meshOwner
 * @property string $routeName
 * @property Shapes\RouteSpec $spec
 * @property list<Shapes\TagRef>|null $tags
 * @property string $virtualRouterName
 */
class CreateRouteRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     meshName: string,
     *     meshOwner?: string|null,
     *     routeName: string,
     *     spec: Shapes\RouteSpec,
     *     tags?: list<Shapes\TagRef>|null,
     *     virtualRouterName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
