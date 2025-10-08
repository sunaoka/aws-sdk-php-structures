<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\UpdateVehicle;

trait UpdateVehicleTrait
{
    /**
     * @param UpdateVehicleRequest $args
     * @return UpdateVehicleResponse
     */
    public function updateVehicle(UpdateVehicleRequest $args)
    {
        $result = parent::updateVehicle($args->toArray());
        return new UpdateVehicleResponse($result->toArray());
    }
}
