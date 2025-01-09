<?php

namespace Sunaoka\Aws\Structures\Deadline\ListQueues;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $farmId
 * @property string $principalId
 * @property 'IDLE'|'SCHEDULING'|'SCHEDULING_BLOCKED' $status
 * @property string $nextToken
 * @property int<1, 100> $maxResults
 */
class ListQueuesRequest extends Request
{
    /**
     * @param array{
     *     farmId: string,
     *     principalId?: string,
     *     status?: 'IDLE'|'SCHEDULING'|'SCHEDULING_BLOCKED',
     *     nextToken?: string,
     *     maxResults?: int<1, 100>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
