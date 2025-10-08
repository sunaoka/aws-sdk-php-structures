<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateVpc;

trait CreateVpcTrait
{
    /**
     * @param CreateVpcRequest $args
     * @return CreateVpcResponse
     */
    public function createVpc(CreateVpcRequest $args)
    {
        $result = parent::createVpc($args->toArray());
        return new CreateVpcResponse($result->toArray());
    }
}
