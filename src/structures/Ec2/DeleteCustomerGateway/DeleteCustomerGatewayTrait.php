<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteCustomerGateway;

trait DeleteCustomerGatewayTrait
{
    /**
     * @param DeleteCustomerGatewayRequest $args
     * @return void
     */
    public function deleteCustomerGateway(DeleteCustomerGatewayRequest $args)
    {
        parent::deleteCustomerGateway($args->toArray());
    }
}
