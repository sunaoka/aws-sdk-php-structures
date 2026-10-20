<?php

namespace Sunaoka\Aws\Structures\Ecs\ListGateways;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $names
 * @property list<'ACTIVE'|'UPDATE_IN_PROGRESS'|'UPDATE_COMPLETE'|'UPDATE_FAILED'|'DELETED'>|null $status
 * @property int|null $maxResults
 * @property string|null $nextToken
 */
class ListGatewaysRequest extends Request
{
    /**
     * @param array{
     *     names?: list<string>|null,
     *     status?: list<'ACTIVE'|'UPDATE_IN_PROGRESS'|'UPDATE_COMPLETE'|'UPDATE_FAILED'|'DELETED'>|null,
     *     maxResults?: int|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
