<?php

namespace Sunaoka\Aws\Structures\Deadline\ListQueueMembers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $farmId
 * @property string $queueId
 * @property string $nextToken
 * @property int $maxResults
 */
class ListQueueMembersRequest extends Request
{
    /**
     * @param array{
     *     farmId: string,
     *     queueId: string,
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
