<?php

namespace Sunaoka\Aws\Structures\Braket\SearchQuantumTasks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\SearchQuantumTasksFilter> $filters
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class SearchQuantumTasksRequest extends Request
{
    /**
     * @param array{
     *     filters: list<Shapes\SearchQuantumTasksFilter>,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
