<?php

namespace Sunaoka\Aws\Structures\ApplicationDiscoveryService\StartImportTask;

trait StartImportTaskTrait
{
    /**
     * @param StartImportTaskRequest $args
     * @return StartImportTaskResponse
     */
    public function startImportTask(StartImportTaskRequest $args)
    {
        $result = parent::startImportTask($args->toArray());
        return new StartImportTaskResponse($result->toArray());
    }
}
