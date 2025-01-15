<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\ListSessions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, max>|null $maxResults
 * @property string|null $nextToken
 * @property string $portalId
 * @property string|null $sessionId
 * @property 'StartTimeAscending'|'StartTimeDescending'|null $sortBy
 * @property 'Active'|'Terminated'|null $status
 * @property string|null $username
 */
class ListSessionsRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, max>|null,
     *     nextToken?: string|null,
     *     portalId: string,
     *     sessionId?: string|null,
     *     sortBy?: 'StartTimeAscending'|'StartTimeDescending'|null,
     *     status?: 'Active'|'Terminated'|null,
     *     username?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
