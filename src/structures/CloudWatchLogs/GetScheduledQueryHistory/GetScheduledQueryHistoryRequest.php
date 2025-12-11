<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\GetScheduledQueryHistory;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $identifier
 * @property int<0, max> $startTime
 * @property int<0, max> $endTime
 * @property list<'Running'|'InvalidQuery'|'Complete'|'Failed'|'Timeout'>|null $executionStatuses
 * @property int<1, 1000>|null $maxResults
 * @property string|null $nextToken
 */
class GetScheduledQueryHistoryRequest extends Request
{
    /**
     * @param array{
     *     identifier: string,
     *     startTime: int<0, max>,
     *     endTime: int<0, max>,
     *     executionStatuses?: list<'Running'|'InvalidQuery'|'Complete'|'Failed'|'Timeout'>|null,
     *     maxResults?: int<1, 1000>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
