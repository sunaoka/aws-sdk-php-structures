<?php

namespace Sunaoka\Aws\Structures\IoTWireless\DeleteWirelessGatewayTaskDefinition;

trait DeleteWirelessGatewayTaskDefinitionTrait
{
    /**
     * @param DeleteWirelessGatewayTaskDefinitionRequest $args
     * @return DeleteWirelessGatewayTaskDefinitionResponse
     */
    public function deleteWirelessGatewayTaskDefinition(DeleteWirelessGatewayTaskDefinitionRequest $args)
    {
        $result = parent::deleteWirelessGatewayTaskDefinition($args->toArray());
        return new DeleteWirelessGatewayTaskDefinitionResponse($result->toArray());
    }
}
