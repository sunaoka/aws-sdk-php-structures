<?php

namespace Sunaoka\Aws\Structures\StorageGateway\UpdateVTLDeviceType;

trait UpdateVTLDeviceTypeTrait
{
    /**
     * @param UpdateVTLDeviceTypeRequest $args
     * @return UpdateVTLDeviceTypeResponse
     */
    public function updateVTLDeviceType(UpdateVTLDeviceTypeRequest $args)
    {
        $result = parent::updateVTLDeviceType($args->toArray());
        return new UpdateVTLDeviceTypeResponse($result->toArray());
    }
}
