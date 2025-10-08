<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\DeleteCustomRoutingEndpointGroup;

trait DeleteCustomRoutingEndpointGroupTrait
{
    /**
     * @param DeleteCustomRoutingEndpointGroupRequest $args
     * @return void
     */
    public function deleteCustomRoutingEndpointGroup(DeleteCustomRoutingEndpointGroupRequest $args)
    {
        parent::deleteCustomRoutingEndpointGroup($args->toArray());
    }
}
