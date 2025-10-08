<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\UpdateDevicePool;

trait UpdateDevicePoolTrait
{
    /**
     * @param UpdateDevicePoolRequest $args
     * @return UpdateDevicePoolResponse
     */
    public function updateDevicePool(UpdateDevicePoolRequest $args)
    {
        $result = parent::updateDevicePool($args->toArray());
        return new UpdateDevicePoolResponse($result->toArray());
    }
}
