<?php

namespace Sunaoka\Aws\Structures\Rds\CancelExportTask;

trait CancelExportTaskTrait
{
    /**
     * @param CancelExportTaskRequest $args
     * @return CancelExportTaskResponse
     */
    public function cancelExportTask(CancelExportTaskRequest $args)
    {
        $result = parent::cancelExportTask($args->toArray());
        return new CancelExportTaskResponse($result->toArray());
    }
}
