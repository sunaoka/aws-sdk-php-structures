<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\ListScheduledQueries;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 1000>|null $maxResults
 * @property string|null $nextToken
 * @property 'ENABLED'|'DISABLED'|null $state
 * @property 'CUSTOMER_MANAGED'|'AWS_MANAGED'|null $scheduleType
 */
class ListScheduledQueriesRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 1000>|null,
     *     nextToken?: string|null,
     *     state?: 'ENABLED'|'DISABLED'|null,
     *     scheduleType?: 'CUSTOMER_MANAGED'|'AWS_MANAGED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
