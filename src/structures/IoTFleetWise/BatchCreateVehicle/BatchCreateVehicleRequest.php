<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\BatchCreateVehicle;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\CreateVehicleRequestItem> $vehicles
 */
class BatchCreateVehicleRequest extends Request
{
    /**
     * @param array{vehicles: list<Shapes\CreateVehicleRequestItem>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
