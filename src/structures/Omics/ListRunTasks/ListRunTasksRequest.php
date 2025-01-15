<?php

namespace Sunaoka\Aws\Structures\Omics\ListRunTasks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 * @property 'PENDING'|'STARTING'|'RUNNING'|'STOPPING'|'COMPLETED'|'CANCELLED'|'FAILED'|null $status
 * @property string|null $startingToken
 * @property int<1, 100>|null $maxResults
 */
class ListRunTasksRequest extends Request
{
    /**
     * @param array{
     *     id: string,
     *     status?: 'PENDING'|'STARTING'|'RUNNING'|'STOPPING'|'COMPLETED'|'CANCELLED'|'FAILED'|null,
     *     startingToken?: string|null,
     *     maxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
