<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\ListVehiclesInFleet;

trait ListVehiclesInFleetTrait
{
    /**
     * @param ListVehiclesInFleetRequest $args
     * @return ListVehiclesInFleetResponse
     */
    public function listVehiclesInFleet(ListVehiclesInFleetRequest $args)
    {
        $result = parent::listVehiclesInFleet($args->toArray());
        return new ListVehiclesInFleetResponse($result->toArray());
    }
}
