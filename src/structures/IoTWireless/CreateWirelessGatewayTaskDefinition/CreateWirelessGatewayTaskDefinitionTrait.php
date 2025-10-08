<?php

namespace Sunaoka\Aws\Structures\IoTWireless\CreateWirelessGatewayTaskDefinition;

trait CreateWirelessGatewayTaskDefinitionTrait
{
    /**
     * @param CreateWirelessGatewayTaskDefinitionRequest $args
     * @return CreateWirelessGatewayTaskDefinitionResponse
     */
    public function createWirelessGatewayTaskDefinition(CreateWirelessGatewayTaskDefinitionRequest $args)
    {
        $result = parent::createWirelessGatewayTaskDefinition($args->toArray());
        return new CreateWirelessGatewayTaskDefinitionResponse($result->toArray());
    }
}
