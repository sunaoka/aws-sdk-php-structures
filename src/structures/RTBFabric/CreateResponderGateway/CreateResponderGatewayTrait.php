<?php

namespace Sunaoka\Aws\Structures\RTBFabric\CreateResponderGateway;

trait CreateResponderGatewayTrait
{
    /**
     * @param CreateResponderGatewayRequest $args
     * @return CreateResponderGatewayResponse
     */
    public function createResponderGateway(CreateResponderGatewayRequest $args)
    {
        $result = parent::createResponderGateway($args->toArray());
        return new CreateResponderGatewayResponse($result->toArray());
    }
}
