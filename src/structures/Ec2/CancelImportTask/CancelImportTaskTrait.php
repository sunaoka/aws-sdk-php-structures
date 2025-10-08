<?php

namespace Sunaoka\Aws\Structures\Ec2\CancelImportTask;

trait CancelImportTaskTrait
{
    /**
     * @param CancelImportTaskRequest $args
     * @return CancelImportTaskResponse
     */
    public function cancelImportTask(CancelImportTaskRequest $args)
    {
        $result = parent::cancelImportTask($args->toArray());
        return new CancelImportTaskResponse($result->toArray());
    }
}
