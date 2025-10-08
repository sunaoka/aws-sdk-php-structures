<?php

namespace Sunaoka\Aws\Structures\Ec2\CancelExportTask;

trait CancelExportTaskTrait
{
    /**
     * @param CancelExportTaskRequest $args
     * @return void
     */
    public function cancelExportTask(CancelExportTaskRequest $args)
    {
        parent::cancelExportTask($args->toArray());
    }
}
