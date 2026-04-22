<?php

namespace Sunaoka\Aws\Structures\EMRServerless\ListSessions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 * @property string|null $nextToken
 * @property int<1, 50>|null $maxResults
 * @property list<'SUBMITTED'|'STARTING'|'STARTED'|'IDLE'|'BUSY'|'FAILED'|'TERMINATING'|'TERMINATED'>|null $states
 * @property \Aws\Api\DateTimeResult|null $createdAtAfter
 * @property \Aws\Api\DateTimeResult|null $createdAtBefore
 */
class ListSessionsRequest extends Request
{
    /**
     * @param array{
     *     applicationId: string,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 50>|null,
     *     states?: list<'SUBMITTED'|'STARTING'|'STARTED'|'IDLE'|'BUSY'|'FAILED'|'TERMINATING'|'TERMINATED'>|null,
     *     createdAtAfter?: \Aws\Api\DateTimeResult|null,
     *     createdAtBefore?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
