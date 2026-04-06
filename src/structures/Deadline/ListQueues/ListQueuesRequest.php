<?php

namespace Sunaoka\Aws\Structures\Deadline\ListQueues;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $farmId
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 * @property string|null $principalId
 * @property 'IDLE'|'SCHEDULING'|'SCHEDULING_BLOCKED'|null $status
 */
class ListQueuesRequest extends Request
{
    /**
     * @param array{
     *     farmId: string,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null,
     *     principalId?: string|null,
     *     status?: 'IDLE'|'SCHEDULING'|'SCHEDULING_BLOCKED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
