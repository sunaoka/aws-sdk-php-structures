<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\GetVehicleStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $campaignName
 * @property string $vehicleName
 * @property 'CREATED'|'READY'|'HEALTHY'|'SUSPENDED'|'DELETING' $status
 */
class VehicleStatus extends Shape
{
    /**
     * @param array{
     *     campaignName?: string,
     *     vehicleName?: string,
     *     status?: 'CREATED'|'READY'|'HEALTHY'|'SUSPENDED'|'DELETING'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
