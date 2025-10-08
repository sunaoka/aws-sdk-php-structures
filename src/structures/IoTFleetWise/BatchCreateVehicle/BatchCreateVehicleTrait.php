<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\BatchCreateVehicle;

trait BatchCreateVehicleTrait
{
    /**
     * @param BatchCreateVehicleRequest $args
     * @return BatchCreateVehicleResponse
     */
    public function batchCreateVehicle(BatchCreateVehicleRequest $args)
    {
        $result = parent::batchCreateVehicle($args->toArray());
        return new BatchCreateVehicleResponse($result->toArray());
    }
}
