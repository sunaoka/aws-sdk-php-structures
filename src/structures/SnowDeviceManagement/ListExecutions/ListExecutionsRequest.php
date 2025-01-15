<?php

namespace Sunaoka\Aws\Structures\SnowDeviceManagement\ListExecutions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 * @property 'QUEUED'|'IN_PROGRESS'|'CANCELED'|'FAILED'|'SUCCEEDED'|'REJECTED'|'TIMED_OUT'|null $state
 * @property string $taskId
 */
class ListExecutionsRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null,
     *     state?: 'QUEUED'|'IN_PROGRESS'|'CANCELED'|'FAILED'|'SUCCEEDED'|'REJECTED'|'TIMED_OUT'|null,
     *     taskId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
