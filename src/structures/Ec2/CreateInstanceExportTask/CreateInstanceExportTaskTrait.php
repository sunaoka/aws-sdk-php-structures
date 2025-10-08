<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateInstanceExportTask;

trait CreateInstanceExportTaskTrait
{
    /**
     * @param CreateInstanceExportTaskRequest $args
     * @return CreateInstanceExportTaskResponse
     */
    public function createInstanceExportTask(CreateInstanceExportTaskRequest $args)
    {
        $result = parent::createInstanceExportTask($args->toArray());
        return new CreateInstanceExportTaskResponse($result->toArray());
    }
}
