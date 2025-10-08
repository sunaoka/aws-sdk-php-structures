<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetWirelessGatewayTaskDefinition;

trait GetWirelessGatewayTaskDefinitionTrait
{
    /**
     * @param GetWirelessGatewayTaskDefinitionRequest $args
     * @return GetWirelessGatewayTaskDefinitionResponse
     */
    public function getWirelessGatewayTaskDefinition(GetWirelessGatewayTaskDefinitionRequest $args)
    {
        $result = parent::getWirelessGatewayTaskDefinition($args->toArray());
        return new GetWirelessGatewayTaskDefinitionResponse($result->toArray());
    }
}
