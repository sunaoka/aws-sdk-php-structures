<?php

namespace Sunaoka\Aws\Structures\IoTWireless\DeleteWirelessGatewayTask;

trait DeleteWirelessGatewayTaskTrait
{
    /**
     * @param DeleteWirelessGatewayTaskRequest $args
     * @return DeleteWirelessGatewayTaskResponse
     */
    public function deleteWirelessGatewayTask(DeleteWirelessGatewayTaskRequest $args)
    {
        $result = parent::deleteWirelessGatewayTask($args->toArray());
        return new DeleteWirelessGatewayTaskResponse($result->toArray());
    }
}
