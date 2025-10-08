<?php

namespace Sunaoka\Aws\Structures\NeptuneGraph\GetImportTask;

trait GetImportTaskTrait
{
    /**
     * @param GetImportTaskRequest $args
     * @return GetImportTaskResponse
     */
    public function getImportTask(GetImportTaskRequest $args)
    {
        $result = parent::getImportTask($args->toArray());
        return new GetImportTaskResponse($result->toArray());
    }
}
