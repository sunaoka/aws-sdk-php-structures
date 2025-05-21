<?php

namespace Sunaoka\Aws\Structures\Deadline\ListQueueLimitAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $farmId
 * @property string|null $queueId
 * @property string|null $limitId
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 */
class ListQueueLimitAssociationsRequest extends Request
{
    /**
     * @param array{
     *     farmId: string,
     *     queueId?: string|null,
     *     limitId?: string|null,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
