<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetWirelessGatewayTask;

trait GetWirelessGatewayTaskTrait
{
    /**
     * @param GetWirelessGatewayTaskRequest $args
     * @return GetWirelessGatewayTaskResponse
     */
    public function getWirelessGatewayTask(GetWirelessGatewayTaskRequest $args)
    {
        $result = parent::getWirelessGatewayTask($args->toArray());
        return new GetWirelessGatewayTaskResponse($result->toArray());
    }
}
