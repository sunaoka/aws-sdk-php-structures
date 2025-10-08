<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\UpdateCustomRoutingAccelerator;

trait UpdateCustomRoutingAcceleratorTrait
{
    /**
     * @param UpdateCustomRoutingAcceleratorRequest $args
     * @return UpdateCustomRoutingAcceleratorResponse
     */
    public function updateCustomRoutingAccelerator(UpdateCustomRoutingAcceleratorRequest $args)
    {
        $result = parent::updateCustomRoutingAccelerator($args->toArray());
        return new UpdateCustomRoutingAcceleratorResponse($result->toArray());
    }
}
