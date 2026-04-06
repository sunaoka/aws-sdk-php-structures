<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\DeleteOtaTask;

trait DeleteOtaTaskTrait
{
    /**
     * @param DeleteOtaTaskRequest $args
     * @return void
     */
    public function deleteOtaTask(DeleteOtaTaskRequest $args)
    {
        parent::deleteOtaTask($args->toArray());
    }
}
