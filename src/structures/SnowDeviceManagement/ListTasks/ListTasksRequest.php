<?php

namespace Sunaoka\Aws\Structures\SnowDeviceManagement\ListTasks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $maxResults
 * @property string $nextToken
 * @property 'IN_PROGRESS'|'CANCELED'|'COMPLETED' $state
 */
class ListTasksRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int,
     *     nextToken?: string,
     *     state?: 'IN_PROGRESS'|'CANCELED'|'COMPLETED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
