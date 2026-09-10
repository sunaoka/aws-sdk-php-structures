<?php

namespace Sunaoka\Aws\Structures\SageMaker\AttachClusterNodeNetworkInterface;

trait AttachClusterNodeNetworkInterfaceTrait
{
    /**
     * @param AttachClusterNodeNetworkInterfaceRequest $args
     * @return AttachClusterNodeNetworkInterfaceResponse
     */
    public function attachClusterNodeNetworkInterface(AttachClusterNodeNetworkInterfaceRequest $args)
    {
        $result = parent::attachClusterNodeNetworkInterface($args->toArray());
        return new AttachClusterNodeNetworkInterfaceResponse($result->toArray());
    }
}
