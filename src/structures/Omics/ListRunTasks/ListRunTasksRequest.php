<?php

namespace Sunaoka\Aws\Structures\Omics\ListRunTasks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 * @property 'PENDING'|'STARTING'|'RUNNING'|'STOPPING'|'COMPLETED'|'CANCELLED'|'FAILED' $status
 * @property string $startingToken
 * @property int<1, 100> $maxResults
 */
class ListRunTasksRequest extends Request
{
    /**
     * @param array{
     *     id: string,
     *     status?: 'PENDING'|'STARTING'|'RUNNING'|'STOPPING'|'COMPLETED'|'CANCELLED'|'FAILED',
     *     startingToken?: string,
     *     maxResults?: int<1, 100>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
