<?php

namespace Sunaoka\Aws\Structures\Ecs\ListGatewayRoutes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $gateway
 * @property string|null $cluster
 * @property string|null $service
 * @property string|null $serviceContainerPortName
 * @property list<'ACTIVE'|'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'UPDATE_IN_PROGRESS'|'UPDATE_FAILED'|'DELETE_IN_PROGRESS'|'DELETE_FAILED'>|null $status
 * @property int|null $maxResults
 * @property string|null $nextToken
 */
class ListGatewayRoutesRequest extends Request
{
    /**
     * @param array{
     *     gateway?: string|null,
     *     cluster?: string|null,
     *     service?: string|null,
     *     serviceContainerPortName?: string|null,
     *     status?: list<'ACTIVE'|'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'UPDATE_IN_PROGRESS'|'UPDATE_FAILED'|'DELETE_IN_PROGRESS'|'DELETE_FAILED'>|null,
     *     maxResults?: int|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
