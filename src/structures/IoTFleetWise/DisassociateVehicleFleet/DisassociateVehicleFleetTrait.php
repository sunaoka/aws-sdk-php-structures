<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\DisassociateVehicleFleet;

trait DisassociateVehicleFleetTrait
{
    /**
     * @param DisassociateVehicleFleetRequest $args
     * @return DisassociateVehicleFleetResponse
     */
    public function disassociateVehicleFleet(DisassociateVehicleFleetRequest $args)
    {
        $result = parent::disassociateVehicleFleet($args->toArray());
        return new DisassociateVehicleFleetResponse($result->toArray());
    }
}
