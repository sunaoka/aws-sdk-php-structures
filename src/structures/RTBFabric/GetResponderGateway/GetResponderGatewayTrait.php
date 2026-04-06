<?php

namespace Sunaoka\Aws\Structures\RTBFabric\GetResponderGateway;

trait GetResponderGatewayTrait
{
    /**
     * @param GetResponderGatewayRequest $args
     * @return GetResponderGatewayResponse
     */
    public function getResponderGateway(GetResponderGatewayRequest $args)
    {
        $result = parent::getResponderGateway($args->toArray());
        return new GetResponderGatewayResponse($result->toArray());
    }
}
