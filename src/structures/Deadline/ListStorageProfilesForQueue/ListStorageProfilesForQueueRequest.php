<?php

namespace Sunaoka\Aws\Structures\Deadline\ListStorageProfilesForQueue;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $farmId
 * @property string $queueId
 * @property string $nextToken
 * @property int<1, 100> $maxResults
 */
class ListStorageProfilesForQueueRequest extends Request
{
    /**
     * @param array{
     *     farmId: string,
     *     queueId: string,
     *     nextToken?: string,
     *     maxResults?: int<1, 100>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
