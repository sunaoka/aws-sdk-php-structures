<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\GetVehicleStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $campaignName
 * @property string|null $vehicleName
 * @property 'CREATED'|'READY'|'HEALTHY'|'SUSPENDED'|'DELETING'|'READY_FOR_CHECKIN'|null $status
 */
class VehicleStatus extends Shape
{
    /**
     * @param array{
     *     campaignName?: string|null,
     *     vehicleName?: string|null,
     *     status?: 'CREATED'|'READY'|'HEALTHY'|'SUSPENDED'|'DELETING'|'READY_FOR_CHECKIN'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
