<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\CreateVehicle;

trait CreateVehicleTrait
{
    /**
     * @param CreateVehicleRequest $args
     * @return CreateVehicleResponse
     */
    public function createVehicle(CreateVehicleRequest $args)
    {
        $result = parent::createVehicle($args->toArray());
        return new CreateVehicleResponse($result->toArray());
    }
}
