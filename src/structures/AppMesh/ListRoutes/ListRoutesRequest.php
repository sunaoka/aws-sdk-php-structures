<?php

namespace Sunaoka\Aws\Structures\AppMesh\ListRoutes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $limit
 * @property string $meshName
 * @property string $meshOwner
 * @property string $nextToken
 * @property string $virtualRouterName
 */
class ListRoutesRequest extends Request
{
    /**
     * @param array{
     *     limit?: int,
     *     meshName: string,
     *     meshOwner?: string,
     *     nextToken?: string,
     *     virtualRouterName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
