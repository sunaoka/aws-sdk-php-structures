<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\BatchUpdateVehicle;

trait BatchUpdateVehicleTrait
{
    /**
     * @param BatchUpdateVehicleRequest $args
     * @return BatchUpdateVehicleResponse
     */
    public function batchUpdateVehicle(BatchUpdateVehicleRequest $args)
    {
        $result = parent::batchUpdateVehicle($args->toArray());
        return new BatchUpdateVehicleResponse($result->toArray());
    }
}
