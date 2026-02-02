<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\CreateImportTask;

trait CreateImportTaskTrait
{
    /**
     * @param CreateImportTaskRequest $args
     * @return CreateImportTaskResponse
     */
    public function createImportTask(CreateImportTaskRequest $args)
    {
        $result = parent::createImportTask($args->toArray());
        return new CreateImportTaskResponse($result->toArray());
    }
}
