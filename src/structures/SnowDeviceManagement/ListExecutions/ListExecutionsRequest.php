<?php

namespace Sunaoka\Aws\Structures\SnowDeviceManagement\ListExecutions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $maxResults
 * @property string $nextToken
 * @property 'QUEUED'|'IN_PROGRESS'|'CANCELED'|'FAILED'|'SUCCEEDED'|'REJECTED'|'TIMED_OUT' $state
 * @property string $taskId
 */
class ListExecutionsRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int,
     *     nextToken?: string,
     *     state?: 'QUEUED'|'IN_PROGRESS'|'CANCELED'|'FAILED'|'SUCCEEDED'|'REJECTED'|'TIMED_OUT',
     *     taskId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
