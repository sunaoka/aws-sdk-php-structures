<?php

namespace Sunaoka\Aws\Structures\AppMesh\UpdateVirtualGateway;

trait UpdateVirtualGatewayTrait
{
    /**
     * @param UpdateVirtualGatewayRequest $args
     * @return UpdateVirtualGatewayResponse
     */
    public function updateVirtualGateway(UpdateVirtualGatewayRequest $args)
    {
        $result = parent::updateVirtualGateway($args->toArray());
        return new UpdateVirtualGatewayResponse($result->toArray());
    }
}
