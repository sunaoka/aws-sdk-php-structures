<?php

namespace Sunaoka\Aws\Structures\RTBFabric\GetRequesterGateway;

trait GetRequesterGatewayTrait
{
    /**
     * @param GetRequesterGatewayRequest $args
     * @return GetRequesterGatewayResponse
     */
    public function getRequesterGateway(GetRequesterGatewayRequest $args)
    {
        $result = parent::getRequesterGateway($args->toArray());
        return new GetRequesterGatewayResponse($result->toArray());
    }
}
