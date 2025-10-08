<?php

namespace Sunaoka\Aws\Structures\CleanRooms\ListCollaborationChangeRequests;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $collaborationIdentifier
 * @property 'PENDING'|'APPROVED'|'CANCELLED'|'DENIED'|'COMMITTED'|null $status
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 */
class ListCollaborationChangeRequestsRequest extends Request
{
    /**
     * @param array{
     *     collaborationIdentifier: string,
     *     status?: 'PENDING'|'APPROVED'|'CANCELLED'|'DENIED'|'COMMITTED'|null,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
