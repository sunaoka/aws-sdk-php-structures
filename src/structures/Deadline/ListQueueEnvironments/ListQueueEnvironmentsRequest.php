<?php

namespace Sunaoka\Aws\Structures\Deadline\ListQueueEnvironments;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $farmId
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 * @property string $queueId
 */
class ListQueueEnvironmentsRequest extends Request
{
    /**
     * @param array{
     *     farmId: string,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null,
     *     queueId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
