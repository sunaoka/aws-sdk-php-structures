<?php

namespace Sunaoka\Aws\Structures\NeptuneGraph\ListExportTasks;

trait ListExportTasksTrait
{
    /**
     * @param ListExportTasksRequest $args
     * @return ListExportTasksResponse
     */
    public function listExportTasks(ListExportTasksRequest $args)
    {
        $result = parent::listExportTasks($args->toArray());
        return new ListExportTasksResponse($result->toArray());
    }
}
