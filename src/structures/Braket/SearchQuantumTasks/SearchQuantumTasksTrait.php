<?php

namespace Sunaoka\Aws\Structures\Braket\SearchQuantumTasks;

trait SearchQuantumTasksTrait
{
    /**
     * @param SearchQuantumTasksRequest $args
     * @return SearchQuantumTasksResponse
     */
    public function searchQuantumTasks(SearchQuantumTasksRequest $args)
    {
        $result = parent::searchQuantumTasks($args->toArray());
        return new SearchQuantumTasksResponse($result->toArray());
    }
}
