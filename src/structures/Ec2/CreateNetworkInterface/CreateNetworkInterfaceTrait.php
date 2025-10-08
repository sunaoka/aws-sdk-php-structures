<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateNetworkInterface;

trait CreateNetworkInterfaceTrait
{
    /**
     * @param CreateNetworkInterfaceRequest $args
     * @return CreateNetworkInterfaceResponse
     */
    public function createNetworkInterface(CreateNetworkInterfaceRequest $args)
    {
        $result = parent::createNetworkInterface($args->toArray());
        return new CreateNetworkInterfaceResponse($result->toArray());
    }
}
