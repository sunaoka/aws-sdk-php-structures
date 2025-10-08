<?php

namespace Sunaoka\Aws\Structures\MainframeModernization\GetDataSetImportTask;

trait GetDataSetImportTaskTrait
{
    /**
     * @param GetDataSetImportTaskRequest $args
     * @return GetDataSetImportTaskResponse
     */
    public function getDataSetImportTask(GetDataSetImportTaskRequest $args)
    {
        $result = parent::getDataSetImportTask($args->toArray());
        return new GetDataSetImportTaskResponse($result->toArray());
    }
}
