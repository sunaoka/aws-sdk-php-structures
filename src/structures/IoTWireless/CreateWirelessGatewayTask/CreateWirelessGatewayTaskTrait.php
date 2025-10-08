<?php

namespace Sunaoka\Aws\Structures\IoTWireless\CreateWirelessGatewayTask;

trait CreateWirelessGatewayTaskTrait
{
    /**
     * @param CreateWirelessGatewayTaskRequest $args
     * @return CreateWirelessGatewayTaskResponse
     */
    public function createWirelessGatewayTask(CreateWirelessGatewayTaskRequest $args)
    {
        $result = parent::createWirelessGatewayTask($args->toArray());
        return new CreateWirelessGatewayTaskResponse($result->toArray());
    }
}
