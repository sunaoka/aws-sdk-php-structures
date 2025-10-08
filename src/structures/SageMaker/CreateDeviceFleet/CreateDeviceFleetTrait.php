<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateDeviceFleet;

trait CreateDeviceFleetTrait
{
    /**
     * @param CreateDeviceFleetRequest $args
     * @return void
     */
    public function createDeviceFleet(CreateDeviceFleetRequest $args)
    {
        parent::createDeviceFleet($args->toArray());
    }
}
