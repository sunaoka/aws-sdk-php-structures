<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateDeviceFleet;

trait UpdateDeviceFleetTrait
{
    /**
     * @param UpdateDeviceFleetRequest $args
     * @return void
     */
    public function updateDeviceFleet(UpdateDeviceFleetRequest $args)
    {
        parent::updateDeviceFleet($args->toArray());
    }
}
