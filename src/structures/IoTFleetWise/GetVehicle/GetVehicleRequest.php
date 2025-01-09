<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\GetVehicle;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $vehicleName
 */
class GetVehicleRequest extends Request
{
    /**
     * @param array{vehicleName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
