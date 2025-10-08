<?php

namespace Sunaoka\Aws\Structures\MediaConnect\RemoveFlowVpcInterface;

trait RemoveFlowVpcInterfaceTrait
{
    /**
     * @param RemoveFlowVpcInterfaceRequest $args
     * @return RemoveFlowVpcInterfaceResponse
     */
    public function removeFlowVpcInterface(RemoveFlowVpcInterfaceRequest $args)
    {
        $result = parent::removeFlowVpcInterface($args->toArray());
        return new RemoveFlowVpcInterfaceResponse($result->toArray());
    }
}
