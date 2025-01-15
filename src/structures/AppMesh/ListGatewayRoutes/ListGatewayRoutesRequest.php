<?php

namespace Sunaoka\Aws\Structures\AppMesh\ListGatewayRoutes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 100>|null $limit
 * @property string $meshName
 * @property string|null $meshOwner
 * @property string|null $nextToken
 * @property string $virtualGatewayName
 */
class ListGatewayRoutesRequest extends Request
{
    /**
     * @param array{
     *     limit?: int<1, 100>|null,
     *     meshName: string,
     *     meshOwner?: string|null,
     *     nextToken?: string|null,
     *     virtualGatewayName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
