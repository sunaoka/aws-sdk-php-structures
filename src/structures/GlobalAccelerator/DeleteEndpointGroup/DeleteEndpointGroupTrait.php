<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\DeleteEndpointGroup;

trait DeleteEndpointGroupTrait
{
    /**
     * @param DeleteEndpointGroupRequest $args
     * @return void
     */
    public function deleteEndpointGroup(DeleteEndpointGroupRequest $args)
    {
        parent::deleteEndpointGroup($args->toArray());
    }
}
