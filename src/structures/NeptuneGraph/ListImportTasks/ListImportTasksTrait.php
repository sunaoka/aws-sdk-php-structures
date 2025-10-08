<?php

namespace Sunaoka\Aws\Structures\NeptuneGraph\ListImportTasks;

trait ListImportTasksTrait
{
    /**
     * @param ListImportTasksRequest $args
     * @return ListImportTasksResponse
     */
    public function listImportTasks(ListImportTasksRequest $args)
    {
        $result = parent::listImportTasks($args->toArray());
        return new ListImportTasksResponse($result->toArray());
    }
}
