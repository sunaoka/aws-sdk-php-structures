<?php

namespace Sunaoka\Aws\Structures\ApiGateway\PutGatewayResponse;

trait PutGatewayResponseTrait
{
    /**
     * @param PutGatewayResponseRequest $args
     * @return PutGatewayResponseResponse
     */
    public function putGatewayResponse(PutGatewayResponseRequest $args)
    {
        $result = parent::putGatewayResponse($args->toArray());
        return new PutGatewayResponseResponse($result->toArray());
    }
}
