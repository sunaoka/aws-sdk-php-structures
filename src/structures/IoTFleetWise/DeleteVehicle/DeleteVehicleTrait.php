<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\DeleteVehicle;

trait DeleteVehicleTrait
{
    /**
     * @param DeleteVehicleRequest $args
     * @return DeleteVehicleResponse
     */
    public function deleteVehicle(DeleteVehicleRequest $args)
    {
        $result = parent::deleteVehicle($args->toArray());
        return new DeleteVehicleResponse($result->toArray());
    }
}
