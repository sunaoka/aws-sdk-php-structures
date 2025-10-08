<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\UpdateAcceleratorAttributes;

trait UpdateAcceleratorAttributesTrait
{
    /**
     * @param UpdateAcceleratorAttributesRequest $args
     * @return UpdateAcceleratorAttributesResponse
     */
    public function updateAcceleratorAttributes(UpdateAcceleratorAttributesRequest $args)
    {
        $result = parent::updateAcceleratorAttributes($args->toArray());
        return new UpdateAcceleratorAttributesResponse($result->toArray());
    }
}
