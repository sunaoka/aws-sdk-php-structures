<?php

namespace Sunaoka\Aws\Structures\Deadline\ListStorageProfilesForQueue;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $farmId
 * @property string $queueId
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 */
class ListStorageProfilesForQueueRequest extends Request
{
    /**
     * @param array{
     *     farmId: string,
     *     queueId: string,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
