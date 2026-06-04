<?php

namespace Sunaoka\Aws\Structures\Emr\ListSessions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterId
 * @property list<'SUBMITTED'|'STARTING'|'STARTED'|'IDLE'|'BUSY'|'TERMINATING'|'TERMINATED'|'FAILED'>|null $SessionStates
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class ListSessionsRequest extends Request
{
    /**
     * @param array{
     *     ClusterId: string,
     *     SessionStates?: list<'SUBMITTED'|'STARTING'|'STARTED'|'IDLE'|'BUSY'|'TERMINATING'|'TERMINATED'|'FAILED'>|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
