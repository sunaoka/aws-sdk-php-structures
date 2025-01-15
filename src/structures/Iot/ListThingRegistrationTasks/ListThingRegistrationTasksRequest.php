<?php

namespace Sunaoka\Aws\Structures\Iot\ListThingRegistrationTasks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $nextToken
 * @property int<1, 250>|null $maxResults
 * @property 'InProgress'|'Completed'|'Failed'|'Cancelled'|'Cancelling'|null $status
 */
class ListThingRegistrationTasksRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string|null,
     *     maxResults?: int<1, 250>|null,
     *     status?: 'InProgress'|'Completed'|'Failed'|'Cancelled'|'Cancelling'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
