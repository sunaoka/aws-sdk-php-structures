<?php

namespace Sunaoka\Aws\Structures\MediaConnect\AddFlowVpcInterfaces;

trait AddFlowVpcInterfacesTrait
{
    /**
     * @param AddFlowVpcInterfacesRequest $args
     * @return AddFlowVpcInterfacesResponse
     */
    public function addFlowVpcInterfaces(AddFlowVpcInterfacesRequest $args)
    {
        $result = parent::addFlowVpcInterfaces($args->toArray());
        return new AddFlowVpcInterfacesResponse($result->toArray());
    }
}
