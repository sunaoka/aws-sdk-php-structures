<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\GetDevicePool;

trait GetDevicePoolTrait
{
    /**
     * @param GetDevicePoolRequest $args
     * @return GetDevicePoolResponse
     */
    public function getDevicePool(GetDevicePoolRequest $args)
    {
        $result = parent::getDevicePool($args->toArray());
        return new GetDevicePoolResponse($result->toArray());
    }
}
