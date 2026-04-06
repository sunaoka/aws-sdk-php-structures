<?php

namespace Sunaoka\Aws\Structures\Deadline\ListQueues;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $farmId
 * @property string|null $principalId
 * @property 'IDLE'|'SCHEDULING'|'SCHEDULING_BLOCKED'|null $status
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 */
class ListQueuesRequest extends Request
{
    /**
     * @param array{
     *     farmId: string,
     *     principalId?: string|null,
     *     status?: 'IDLE'|'SCHEDULING'|'SCHEDULING_BLOCKED'|null,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
