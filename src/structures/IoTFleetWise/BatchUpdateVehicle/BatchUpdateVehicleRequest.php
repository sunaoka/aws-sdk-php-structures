<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\BatchUpdateVehicle;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\UpdateVehicleRequestItem> $vehicles
 */
class BatchUpdateVehicleRequest extends Request
{
    /**
     * @param array{vehicles: list<Shapes\UpdateVehicleRequestItem>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
