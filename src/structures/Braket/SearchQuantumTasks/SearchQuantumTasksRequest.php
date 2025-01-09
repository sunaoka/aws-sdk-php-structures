<?php

namespace Sunaoka\Aws\Structures\Braket\SearchQuantumTasks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\SearchQuantumTasksFilter> $filters
 * @property int $maxResults
 * @property string $nextToken
 */
class SearchQuantumTasksRequest extends Request
{
    /**
     * @param array{
     *     filters: list<Shapes\SearchQuantumTasksFilter>,
     *     maxResults?: int,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
