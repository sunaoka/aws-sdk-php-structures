<?php

namespace Sunaoka\Aws\Structures\NeptuneGraph\CancelExportTask;

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
