<?php

namespace Sunaoka\Aws\Structures\RTBFabric\ListRequesterGateways;

trait ListRequesterGatewaysTrait
{
    /**
     * @param ListRequesterGatewaysRequest $args
     * @return ListRequesterGatewaysResponse
     */
    public function listRequesterGateways(ListRequesterGatewaysRequest $args)
    {
        $result = parent::listRequesterGateways($args->toArray());
        return new ListRequesterGatewaysResponse($result->toArray());
    }
}
