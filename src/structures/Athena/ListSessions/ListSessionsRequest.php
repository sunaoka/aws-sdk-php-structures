<?php

namespace Sunaoka\Aws\Structures\Athena\ListSessions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WorkGroup
 * @property 'CREATING'|'CREATED'|'IDLE'|'BUSY'|'TERMINATING'|'TERMINATED'|'DEGRADED'|'FAILED'|null $StateFilter
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class ListSessionsRequest extends Request
{
    /**
     * @param array{
     *     WorkGroup: string,
     *     StateFilter?: 'CREATING'|'CREATED'|'IDLE'|'BUSY'|'TERMINATING'|'TERMINATED'|'DEGRADED'|'FAILED'|null,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
