<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\CancelImportTask;

trait CancelImportTaskTrait
{
    /**
     * @param CancelImportTaskRequest $args
     * @return CancelImportTaskResponse
     */
    public function cancelImportTask(CancelImportTaskRequest $args)
    {
        $result = parent::cancelImportTask($args->toArray());
        return new CancelImportTaskResponse($result->toArray());
    }
}
