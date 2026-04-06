<?php

namespace Sunaoka\Aws\Structures\RTBFabric\UpdateRequesterGateway;

trait UpdateRequesterGatewayTrait
{
    /**
     * @param UpdateRequesterGatewayRequest $args
     * @return UpdateRequesterGatewayResponse
     */
    public function updateRequesterGateway(UpdateRequesterGatewayRequest $args)
    {
        $result = parent::updateRequesterGateway($args->toArray());
        return new UpdateRequesterGatewayResponse($result->toArray());
    }
}
