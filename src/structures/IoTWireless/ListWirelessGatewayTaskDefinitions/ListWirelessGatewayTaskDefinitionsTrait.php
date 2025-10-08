<?php

namespace Sunaoka\Aws\Structures\IoTWireless\ListWirelessGatewayTaskDefinitions;

trait ListWirelessGatewayTaskDefinitionsTrait
{
    /**
     * @param ListWirelessGatewayTaskDefinitionsRequest $args
     * @return ListWirelessGatewayTaskDefinitionsResponse
     */
    public function listWirelessGatewayTaskDefinitions(ListWirelessGatewayTaskDefinitionsRequest $args)
    {
        $result = parent::listWirelessGatewayTaskDefinitions($args->toArray());
        return new ListWirelessGatewayTaskDefinitionsResponse($result->toArray());
    }
}
