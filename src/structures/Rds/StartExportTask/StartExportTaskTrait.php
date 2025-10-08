<?php

namespace Sunaoka\Aws\Structures\Rds\StartExportTask;

trait StartExportTaskTrait
{
    /**
     * @param StartExportTaskRequest $args
     * @return StartExportTaskResponse
     */
    public function startExportTask(StartExportTaskRequest $args)
    {
        $result = parent::startExportTask($args->toArray());
        return new StartExportTaskResponse($result->toArray());
    }
}
