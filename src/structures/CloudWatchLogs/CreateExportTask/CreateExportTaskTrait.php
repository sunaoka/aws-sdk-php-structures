<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\CreateExportTask;

trait CreateExportTaskTrait
{
    /**
     * @param CreateExportTaskRequest $args
     * @return CreateExportTaskResponse
     */
    public function createExportTask(CreateExportTaskRequest $args)
    {
        $result = parent::createExportTask($args->toArray());
        return new CreateExportTaskResponse($result->toArray());
    }
}
