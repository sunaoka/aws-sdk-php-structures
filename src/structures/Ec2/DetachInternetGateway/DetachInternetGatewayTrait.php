<?php

namespace Sunaoka\Aws\Structures\Ec2\DetachInternetGateway;

trait DetachInternetGatewayTrait
{
    /**
     * @param DetachInternetGatewayRequest $args
     * @return void
     */
    public function detachInternetGateway(DetachInternetGatewayRequest $args)
    {
        parent::detachInternetGateway($args->toArray());
    }
}
