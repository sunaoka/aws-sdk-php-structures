<?php

namespace Sunaoka\Aws\Structures\MainframeModernization\CreateDataSetExportTask;

trait CreateDataSetExportTaskTrait
{
    /**
     * @param CreateDataSetExportTaskRequest $args
     * @return CreateDataSetExportTaskResponse
     */
    public function createDataSetExportTask(CreateDataSetExportTaskRequest $args)
    {
        $result = parent::createDataSetExportTask($args->toArray());
        return new CreateDataSetExportTaskResponse($result->toArray());
    }
}
