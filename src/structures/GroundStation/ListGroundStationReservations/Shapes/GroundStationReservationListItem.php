<?php

namespace Sunaoka\Aws\Structures\GroundStation\ListGroundStationReservations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'MAINTENANCE'|'CONTACT' $reservationType
 * @property string $groundStationId
 * @property string $antennaName
 * @property \Aws\Api\DateTimeResult $startTime
 * @property \Aws\Api\DateTimeResult $endTime
 * @property ReservationDetails $reservationDetails
 */
class GroundStationReservationListItem extends Shape
{
    /**
     * @param array{
     *     reservationType: 'MAINTENANCE'|'CONTACT',
     *     groundStationId: string,
     *     antennaName: string,
     *     startTime: \Aws\Api\DateTimeResult,
     *     endTime: \Aws\Api\DateTimeResult,
     *     reservationDetails: ReservationDetails
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
