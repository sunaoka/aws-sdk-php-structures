<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\ListFleetsForVehicle;

trait ListFleetsForVehicleTrait
{
    /**
     * @param ListFleetsForVehicleRequest $args
     * @return ListFleetsForVehicleResponse
     */
    public function listFleetsForVehicle(ListFleetsForVehicleRequest $args)
    {
        $result = parent::listFleetsForVehicle($args->toArray());
        return new ListFleetsForVehicleResponse($result->toArray());
    }
}
