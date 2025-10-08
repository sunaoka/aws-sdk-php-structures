<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\DeleteDevicePool;

trait DeleteDevicePoolTrait
{
    /**
     * @param DeleteDevicePoolRequest $args
     * @return DeleteDevicePoolResponse
     */
    public function deleteDevicePool(DeleteDevicePoolRequest $args)
    {
        $result = parent::deleteDevicePool($args->toArray());
        return new DeleteDevicePoolResponse($result->toArray());
    }
}
