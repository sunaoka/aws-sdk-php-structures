<?php

namespace Sunaoka\Aws\Structures\AppMesh\CreateVirtualGateway;

trait CreateVirtualGatewayTrait
{
    /**
     * @param CreateVirtualGatewayRequest $args
     * @return CreateVirtualGatewayResponse
     */
    public function createVirtualGateway(CreateVirtualGatewayRequest $args)
    {
        $result = parent::createVirtualGateway($args->toArray());
        return new CreateVirtualGatewayResponse($result->toArray());
    }
}
