<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateCustomerGateway;

trait CreateCustomerGatewayTrait
{
    /**
     * @param CreateCustomerGatewayRequest $args
     * @return CreateCustomerGatewayResponse
     */
    public function createCustomerGateway(CreateCustomerGatewayRequest $args)
    {
        $result = parent::createCustomerGateway($args->toArray());
        return new CreateCustomerGatewayResponse($result->toArray());
    }
}
