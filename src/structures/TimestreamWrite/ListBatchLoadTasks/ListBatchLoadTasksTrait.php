<?php

namespace Sunaoka\Aws\Structures\TimestreamWrite\ListBatchLoadTasks;

trait ListBatchLoadTasksTrait
{
    /**
     * @param ListBatchLoadTasksRequest $args
     * @return ListBatchLoadTasksResponse
     */
    public function listBatchLoadTasks(ListBatchLoadTasksRequest $args)
    {
        $result = parent::listBatchLoadTasks($args->toArray());
        return new ListBatchLoadTasksResponse($result->toArray());
    }
}
