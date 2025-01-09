<?php

namespace Sunaoka\Aws\Structures\AppMesh\DeleteRoute;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $meshName
 * @property string $meshOwner
 * @property string $routeName
 * @property string $virtualRouterName
 */
class DeleteRouteRequest extends Request
{
    /**
     * @param array{
     *     meshName: string,
     *     meshOwner?: string,
     *     routeName: string,
     *     virtualRouterName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
