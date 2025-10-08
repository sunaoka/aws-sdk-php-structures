<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\ListVehicles;

trait ListVehiclesTrait
{
    /**
     * @param ListVehiclesRequest $args
     * @return ListVehiclesResponse
     */
    public function listVehicles(ListVehiclesRequest $args)
    {
        $result = parent::listVehicles($args->toArray());
        return new ListVehiclesResponse($result->toArray());
    }
}
