<?php

namespace Sunaoka\Aws\Structures\Proton\ListEnvironmentAccountConnections;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $environmentName
 * @property int<1, 100> $maxResults
 * @property string $nextToken
 * @property 'MANAGEMENT_ACCOUNT'|'ENVIRONMENT_ACCOUNT' $requestedBy
 * @property list<'PENDING'|'CONNECTED'|'REJECTED'> $statuses
 */
class ListEnvironmentAccountConnectionsRequest extends Request
{
    /**
     * @param array{
     *     environmentName?: string,
     *     maxResults?: int<1, 100>,
     *     nextToken?: string,
     *     requestedBy: 'MANAGEMENT_ACCOUNT'|'ENVIRONMENT_ACCOUNT',
     *     statuses?: list<'PENDING'|'CONNECTED'|'REJECTED'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
