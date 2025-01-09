<?php

namespace Sunaoka\Aws\Structures\Athena\ListSessions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WorkGroup
 * @property 'CREATING'|'CREATED'|'IDLE'|'BUSY'|'TERMINATING'|'TERMINATED'|'DEGRADED'|'FAILED' $StateFilter
 * @property int<1, 100> $MaxResults
 * @property string $NextToken
 */
class ListSessionsRequest extends Request
{
    /**
     * @param array{
     *     WorkGroup: string,
     *     StateFilter?: 'CREATING'|'CREATED'|'IDLE'|'BUSY'|'TERMINATING'|'TERMINATED'|'DEGRADED'|'FAILED',
     *     MaxResults?: int<1, 100>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
