<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetGatewayResponse;

trait GetGatewayResponseTrait
{
    /**
     * @param GetGatewayResponseRequest $args
     * @return GetGatewayResponseResponse
     */
    public function getGatewayResponse(GetGatewayResponseRequest $args)
    {
        $result = parent::getGatewayResponse($args->toArray());
        return new GetGatewayResponseResponse($result->toArray());
    }
}
