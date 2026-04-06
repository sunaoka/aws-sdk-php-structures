<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\UpdateOtaTask;

trait UpdateOtaTaskTrait
{
    /**
     * @param UpdateOtaTaskRequest $args
     * @return void
     */
    public function updateOtaTask(UpdateOtaTaskRequest $args)
    {
        parent::updateOtaTask($args->toArray());
    }
}
