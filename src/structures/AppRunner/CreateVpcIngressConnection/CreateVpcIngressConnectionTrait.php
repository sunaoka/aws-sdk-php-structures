<?php

namespace Sunaoka\Aws\Structures\AppRunner\CreateVpcIngressConnection;

trait CreateVpcIngressConnectionTrait
{
    /**
     * @param CreateVpcIngressConnectionRequest $args
     * @return CreateVpcIngressConnectionResponse
     */
    public function createVpcIngressConnection(CreateVpcIngressConnectionRequest $args)
    {
        $result = parent::createVpcIngressConnection($args->toArray());
        return new CreateVpcIngressConnectionResponse($result->toArray());
    }
}
