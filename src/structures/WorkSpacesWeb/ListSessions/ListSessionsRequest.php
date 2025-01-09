<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\ListSessions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, max> $maxResults
 * @property string $nextToken
 * @property string $portalId
 * @property string $sessionId
 * @property 'StartTimeAscending'|'StartTimeDescending' $sortBy
 * @property 'Active'|'Terminated' $status
 * @property string $username
 */
class ListSessionsRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, max>,
     *     nextToken?: string,
     *     portalId: string,
     *     sessionId?: string,
     *     sortBy?: 'StartTimeAscending'|'StartTimeDescending',
     *     status?: 'Active'|'Terminated',
     *     username?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
