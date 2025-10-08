<?php

namespace Sunaoka\Aws\Structures\MainframeModernization\CreateDataSetImportTask;

trait CreateDataSetImportTaskTrait
{
    /**
     * @param CreateDataSetImportTaskRequest $args
     * @return CreateDataSetImportTaskResponse
     */
    public function createDataSetImportTask(CreateDataSetImportTaskRequest $args)
    {
        $result = parent::createDataSetImportTask($args->toArray());
        return new CreateDataSetImportTaskResponse($result->toArray());
    }
}
