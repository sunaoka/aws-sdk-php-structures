<?php

namespace Sunaoka\Aws\Structures\RTBFabric\ListResponderGateways;

trait ListResponderGatewaysTrait
{
    /**
     * @param ListResponderGatewaysRequest $args
     * @return ListResponderGatewaysResponse
     */
    public function listResponderGateways(ListResponderGatewaysRequest $args)
    {
        $result = parent::listResponderGateways($args->toArray());
        return new ListResponderGatewaysResponse($result->toArray());
    }
}
