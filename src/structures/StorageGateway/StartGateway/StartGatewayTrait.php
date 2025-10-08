<?php

namespace Sunaoka\Aws\Structures\StorageGateway\StartGateway;

trait StartGatewayTrait
{
    /**
     * @param StartGatewayRequest $args
     * @return StartGatewayResponse
     */
    public function startGateway(StartGatewayRequest $args)
    {
        $result = parent::startGateway($args->toArray());
        return new StartGatewayResponse($result->toArray());
    }
}
