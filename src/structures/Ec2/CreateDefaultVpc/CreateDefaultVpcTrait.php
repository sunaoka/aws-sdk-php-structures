<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateDefaultVpc;

trait CreateDefaultVpcTrait
{
    /**
     * @param CreateDefaultVpcRequest $args
     * @return CreateDefaultVpcResponse
     */
    public function createDefaultVpc(CreateDefaultVpcRequest $args)
    {
        $result = parent::createDefaultVpc($args->toArray());
        return new CreateDefaultVpcResponse($result->toArray());
    }
}
