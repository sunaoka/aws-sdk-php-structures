<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\CreateDevicePool;

trait CreateDevicePoolTrait
{
    /**
     * @param CreateDevicePoolRequest $args
     * @return CreateDevicePoolResponse
     */
    public function createDevicePool(CreateDevicePoolRequest $args)
    {
        $result = parent::createDevicePool($args->toArray());
        return new CreateDevicePoolResponse($result->toArray());
    }
}
