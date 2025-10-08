<?php

namespace Sunaoka\Aws\Structures\Ec2\AttachNetworkInterface;

trait AttachNetworkInterfaceTrait
{
    /**
     * @param AttachNetworkInterfaceRequest $args
     * @return AttachNetworkInterfaceResponse
     */
    public function attachNetworkInterface(AttachNetworkInterfaceRequest $args)
    {
        $result = parent::attachNetworkInterface($args->toArray());
        return new AttachNetworkInterfaceResponse($result->toArray());
    }
}
