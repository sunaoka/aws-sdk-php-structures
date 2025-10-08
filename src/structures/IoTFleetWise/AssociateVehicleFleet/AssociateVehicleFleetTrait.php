<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\AssociateVehicleFleet;

trait AssociateVehicleFleetTrait
{
    /**
     * @param AssociateVehicleFleetRequest $args
     * @return AssociateVehicleFleetResponse
     */
    public function associateVehicleFleet(AssociateVehicleFleetRequest $args)
    {
        $result = parent::associateVehicleFleet($args->toArray());
        return new AssociateVehicleFleetResponse($result->toArray());
    }
}
