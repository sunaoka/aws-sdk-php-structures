<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\ListSessions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $portalId
 * @property string|null $username
 * @property string|null $sessionId
 * @property 'StartTimeAscending'|'StartTimeDescending'|null $sortBy
 * @property 'Active'|'Terminated'|null $status
 * @property int<1, max>|null $maxResults
 * @property string|null $nextToken
 */
class ListSessionsRequest extends Request
{
    /**
     * @param array{
     *     portalId: string,
     *     username?: string|null,
     *     sessionId?: string|null,
     *     sortBy?: 'StartTimeAscending'|'StartTimeDescending'|null,
     *     status?: 'Active'|'Terminated'|null,
     *     maxResults?: int<1, max>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
