<?php

namespace Sunaoka\Aws\Structures\ApiGateway\UpdateGatewayResponse;

trait UpdateGatewayResponseTrait
{
    /**
     * @param UpdateGatewayResponseRequest $args
     * @return UpdateGatewayResponseResponse
     */
    public function updateGatewayResponse(UpdateGatewayResponseRequest $args)
    {
        $result = parent::updateGatewayResponse($args->toArray());
        return new UpdateGatewayResponseResponse($result->toArray());
    }
}
