<?php

namespace Sunaoka\Aws\Structures\Ec2\AttachInternetGateway;

trait AttachInternetGatewayTrait
{
    /**
     * @param AttachInternetGatewayRequest $args
     * @return void
     */
    public function attachInternetGateway(AttachInternetGatewayRequest $args)
    {
        parent::attachInternetGateway($args->toArray());
    }
}
