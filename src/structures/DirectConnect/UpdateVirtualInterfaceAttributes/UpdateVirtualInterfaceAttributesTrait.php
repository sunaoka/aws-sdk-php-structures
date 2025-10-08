<?php

namespace Sunaoka\Aws\Structures\DirectConnect\UpdateVirtualInterfaceAttributes;

trait UpdateVirtualInterfaceAttributesTrait
{
    /**
     * @param UpdateVirtualInterfaceAttributesRequest $args
     * @return UpdateVirtualInterfaceAttributesResponse
     */
    public function updateVirtualInterfaceAttributes(UpdateVirtualInterfaceAttributesRequest $args)
    {
        $result = parent::updateVirtualInterfaceAttributes($args->toArray());
        return new UpdateVirtualInterfaceAttributesResponse($result->toArray());
    }
}
