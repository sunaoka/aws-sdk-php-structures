<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\CancelExportTask;

trait CancelExportTaskTrait
{
    /**
     * @param CancelExportTaskRequest $args
     * @return void
     */
    public function cancelExportTask(CancelExportTaskRequest $args)
    {
        parent::cancelExportTask($args->toArray());
    }
}
