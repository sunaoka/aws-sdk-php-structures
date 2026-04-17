<?php

namespace Sunaoka\Aws\Structures\GroundStation\ListGroundStationReservations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PLANNED'|'UNPLANNED' $maintenanceType
 */
class MaintenanceReservationDetails extends Shape
{
    /**
     * @param array{maintenanceType: 'PLANNED'|'UNPLANNED'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
