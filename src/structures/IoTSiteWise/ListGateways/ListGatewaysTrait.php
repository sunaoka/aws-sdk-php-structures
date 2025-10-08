<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListGateways;

trait ListGatewaysTrait
{
    /**
     * @param ListGatewaysRequest $args
     * @return ListGatewaysResponse
     */
    public function listGateways(ListGatewaysRequest $args)
    {
        $result = parent::listGateways($args->toArray());
        return new ListGatewaysResponse($result->toArray());
    }
}
