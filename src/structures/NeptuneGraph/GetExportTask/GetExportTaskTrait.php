<?php

namespace Sunaoka\Aws\Structures\NeptuneGraph\GetExportTask;

trait GetExportTaskTrait
{
    /**
     * @param GetExportTaskRequest $args
     * @return GetExportTaskResponse
     */
    public function getExportTask(GetExportTaskRequest $args)
    {
        $result = parent::getExportTask($args->toArray());
        return new GetExportTaskResponse($result->toArray());
    }
}
