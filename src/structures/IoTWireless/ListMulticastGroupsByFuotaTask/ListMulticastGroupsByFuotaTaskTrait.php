<?php

namespace Sunaoka\Aws\Structures\IoTWireless\ListMulticastGroupsByFuotaTask;

trait ListMulticastGroupsByFuotaTaskTrait
{
    /**
     * @param ListMulticastGroupsByFuotaTaskRequest $args
     * @return ListMulticastGroupsByFuotaTaskResponse
     */
    public function listMulticastGroupsByFuotaTask(ListMulticastGroupsByFuotaTaskRequest $args)
    {
        $result = parent::listMulticastGroupsByFuotaTask($args->toArray());
        return new ListMulticastGroupsByFuotaTaskResponse($result->toArray());
    }
}
