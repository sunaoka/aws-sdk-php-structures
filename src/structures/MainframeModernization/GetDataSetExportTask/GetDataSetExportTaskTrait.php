<?php

namespace Sunaoka\Aws\Structures\MainframeModernization\GetDataSetExportTask;

trait GetDataSetExportTaskTrait
{
    /**
     * @param GetDataSetExportTaskRequest $args
     * @return GetDataSetExportTaskResponse
     */
    public function getDataSetExportTask(GetDataSetExportTaskRequest $args)
    {
        $result = parent::getDataSetExportTask($args->toArray());
        return new GetDataSetExportTaskResponse($result->toArray());
    }
}
