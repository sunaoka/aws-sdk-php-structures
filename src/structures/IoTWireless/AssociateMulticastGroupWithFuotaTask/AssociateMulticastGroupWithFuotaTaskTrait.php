<?php

namespace Sunaoka\Aws\Structures\IoTWireless\AssociateMulticastGroupWithFuotaTask;

trait AssociateMulticastGroupWithFuotaTaskTrait
{
    /**
     * @param AssociateMulticastGroupWithFuotaTaskRequest $args
     * @return AssociateMulticastGroupWithFuotaTaskResponse
     */
    public function associateMulticastGroupWithFuotaTask(AssociateMulticastGroupWithFuotaTaskRequest $args)
    {
        $result = parent::associateMulticastGroupWithFuotaTask($args->toArray());
        return new AssociateMulticastGroupWithFuotaTaskResponse($result->toArray());
    }
}
