<?php

namespace Sunaoka\Aws\Structures\MediaConnect\CreateGateway;

trait CreateGatewayTrait
{
    /**
     * @param CreateGatewayRequest $args
     * @return CreateGatewayResponse
     */
    public function createGateway(CreateGatewayRequest $args)
    {
        $result = parent::createGateway($args->toArray());
        return new CreateGatewayResponse($result->toArray());
    }
}
