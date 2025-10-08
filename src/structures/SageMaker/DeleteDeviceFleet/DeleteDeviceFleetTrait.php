<?php

namespace Sunaoka\Aws\Structures\SageMaker\DeleteDeviceFleet;

trait DeleteDeviceFleetTrait
{
    /**
     * @param DeleteDeviceFleetRequest $args
     * @return void
     */
    public function deleteDeviceFleet(DeleteDeviceFleetRequest $args)
    {
        parent::deleteDeviceFleet($args->toArray());
    }
}
