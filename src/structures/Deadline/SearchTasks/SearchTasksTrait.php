<?php

namespace Sunaoka\Aws\Structures\Deadline\SearchTasks;

trait SearchTasksTrait
{
    /**
     * @param SearchTasksRequest $args
     * @return SearchTasksResponse
     */
    public function searchTasks(SearchTasksRequest $args)
    {
        $result = parent::searchTasks($args->toArray());
        return new SearchTasksResponse($result->toArray());
    }
}
