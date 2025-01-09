<?php

namespace Sunaoka\Aws\Structures\CleanRooms\ListMemberships;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $nextToken
 * @property int $maxResults
 * @property 'ACTIVE'|'REMOVED'|'COLLABORATION_DELETED' $status
 */
class ListMembershipsRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string,
     *     maxResults?: int,
     *     status?: 'ACTIVE'|'REMOVED'|'COLLABORATION_DELETED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
