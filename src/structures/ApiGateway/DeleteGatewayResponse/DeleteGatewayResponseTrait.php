<?php

namespace Sunaoka\Aws\Structures\ApiGateway\DeleteGatewayResponse;

trait DeleteGatewayResponseTrait
{
    /**
     * @param DeleteGatewayResponseRequest $args
     * @return void
     */
    public function deleteGatewayResponse(DeleteGatewayResponseRequest $args)
    {
        parent::deleteGatewayResponse($args->toArray());
    }
}
