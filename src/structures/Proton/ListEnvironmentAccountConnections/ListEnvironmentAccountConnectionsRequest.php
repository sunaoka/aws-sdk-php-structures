<?php

namespace Sunaoka\Aws\Structures\Proton\ListEnvironmentAccountConnections;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $environmentName
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 * @property 'MANAGEMENT_ACCOUNT'|'ENVIRONMENT_ACCOUNT' $requestedBy
 * @property list<'PENDING'|'CONNECTED'|'REJECTED'>|null $statuses
 */
class ListEnvironmentAccountConnectionsRequest extends Request
{
    /**
     * @param array{
     *     environmentName?: string|null,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null,
     *     requestedBy: 'MANAGEMENT_ACCOUNT'|'ENVIRONMENT_ACCOUNT',
     *     statuses?: list<'PENDING'|'CONNECTED'|'REJECTED'>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
