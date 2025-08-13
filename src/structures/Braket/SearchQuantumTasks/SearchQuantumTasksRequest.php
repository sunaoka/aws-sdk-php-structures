<?php

namespace Sunaoka\Aws\Structures\Braket\SearchQuantumTasks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 * @property list<Shapes\SearchQuantumTasksFilter> $filters
 */
class SearchQuantumTasksRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null,
     *     filters: list<Shapes\SearchQuantumTasksFilter>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
