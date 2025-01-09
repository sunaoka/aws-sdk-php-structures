<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\DeleteVehicle;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $vehicleName
 */
class DeleteVehicleRequest extends Request
{
    /**
     * @param array{vehicleName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
