<?php

namespace Sunaoka\Aws\Structures\GroundStation\ListGroundStationReservations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MaintenanceReservationDetails|null $maintenance
 * @property ContactReservationDetails|null $contact
 */
class ReservationDetails extends Shape
{
    /**
     * @param array{
     *     maintenance?: MaintenanceReservationDetails|null,
     *     contact?: ContactReservationDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
