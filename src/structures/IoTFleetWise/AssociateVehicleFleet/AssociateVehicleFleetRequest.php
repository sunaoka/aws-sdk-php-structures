<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\AssociateVehicleFleet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $vehicleName
 * @property string $fleetId
 */
class AssociateVehicleFleetRequest extends Request
{
    /**
     * @param array{
     *     vehicleName: string,
     *     fleetId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
