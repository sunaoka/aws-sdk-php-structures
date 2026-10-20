<?php

namespace Sunaoka\Aws\Structures\Ecs\UpdateGateway;

trait UpdateGatewayTrait
{
    /**
     * @param UpdateGatewayRequest $args
     * @return UpdateGatewayResponse
     */
    public function updateGateway(UpdateGatewayRequest $args)
    {
        $result = parent::updateGateway($args->toArray());
        return new UpdateGatewayResponse($result->toArray());
    }
}
