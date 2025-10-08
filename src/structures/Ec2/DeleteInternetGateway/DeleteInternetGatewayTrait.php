<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteInternetGateway;

trait DeleteInternetGatewayTrait
{
    /**
     * @param DeleteInternetGatewayRequest $args
     * @return void
     */
    public function deleteInternetGateway(DeleteInternetGatewayRequest $args)
    {
        parent::deleteInternetGateway($args->toArray());
    }
}
