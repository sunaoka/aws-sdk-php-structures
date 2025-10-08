<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\GetVehicle;

trait GetVehicleTrait
{
    /**
     * @param GetVehicleRequest $args
     * @return GetVehicleResponse
     */
    public function getVehicle(GetVehicleRequest $args)
    {
        $result = parent::getVehicle($args->toArray());
        return new GetVehicleResponse($result->toArray());
    }
}
