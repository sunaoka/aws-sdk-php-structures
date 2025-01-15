<?php

namespace Sunaoka\Aws\Structures\SnowDeviceManagement\ListTasks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 * @property 'IN_PROGRESS'|'CANCELED'|'COMPLETED'|null $state
 */
class ListTasksRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null,
     *     state?: 'IN_PROGRESS'|'CANCELED'|'COMPLETED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
