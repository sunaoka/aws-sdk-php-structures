<?php

namespace Sunaoka\Aws\Structures\AppMesh\ListGatewayRoutes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $limit
 * @property string $meshName
 * @property string $meshOwner
 * @property string $nextToken
 * @property string $virtualGatewayName
 */
class ListGatewayRoutesRequest extends Request
{
    /**
     * @param array{
     *     limit?: int,
     *     meshName: string,
     *     meshOwner?: string,
     *     nextToken?: string,
     *     virtualGatewayName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
