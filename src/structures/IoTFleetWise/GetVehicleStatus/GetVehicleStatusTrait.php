<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\GetVehicleStatus;

trait GetVehicleStatusTrait
{
    /**
     * @param GetVehicleStatusRequest $args
     * @return GetVehicleStatusResponse
     */
    public function getVehicleStatus(GetVehicleStatusRequest $args)
    {
        $result = parent::getVehicleStatus($args->toArray());
        return new GetVehicleStatusResponse($result->toArray());
    }
}
