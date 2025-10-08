<?php

namespace Sunaoka\Aws\Structures\IoTWireless\DisassociateMulticastGroupFromFuotaTask;

trait DisassociateMulticastGroupFromFuotaTaskTrait
{
    /**
     * @param DisassociateMulticastGroupFromFuotaTaskRequest $args
     * @return DisassociateMulticastGroupFromFuotaTaskResponse
     */
    public function disassociateMulticastGroupFromFuotaTask(DisassociateMulticastGroupFromFuotaTaskRequest $args)
    {
        $result = parent::disassociateMulticastGroupFromFuotaTask($args->toArray());
        return new DisassociateMulticastGroupFromFuotaTaskResponse($result->toArray());
    }
}
