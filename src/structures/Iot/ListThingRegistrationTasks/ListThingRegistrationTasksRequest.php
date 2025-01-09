<?php

namespace Sunaoka\Aws\Structures\Iot\ListThingRegistrationTasks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $nextToken
 * @property int $maxResults
 * @property 'InProgress'|'Completed'|'Failed'|'Cancelled'|'Cancelling' $status
 */
class ListThingRegistrationTasksRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string,
     *     maxResults?: int,
     *     status?: 'InProgress'|'Completed'|'Failed'|'Cancelled'|'Cancelling'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
