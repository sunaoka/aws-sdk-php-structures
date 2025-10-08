<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\UpdateCustomRoutingAcceleratorAttributes;

trait UpdateCustomRoutingAcceleratorAttributesTrait
{
    /**
     * @param UpdateCustomRoutingAcceleratorAttributesRequest $args
     * @return UpdateCustomRoutingAcceleratorAttributesResponse
     */
    public function updateCustomRoutingAcceleratorAttributes(UpdateCustomRoutingAcceleratorAttributesRequest $args)
    {
        $result = parent::updateCustomRoutingAcceleratorAttributes($args->toArray());
        return new UpdateCustomRoutingAcceleratorAttributesResponse($result->toArray());
    }
}
