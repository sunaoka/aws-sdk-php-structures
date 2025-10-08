<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateInternetGateway;

trait CreateInternetGatewayTrait
{
    /**
     * @param CreateInternetGatewayRequest $args
     * @return CreateInternetGatewayResponse
     */
    public function createInternetGateway(CreateInternetGatewayRequest $args)
    {
        $result = parent::createInternetGateway($args->toArray());
        return new CreateInternetGatewayResponse($result->toArray());
    }
}
