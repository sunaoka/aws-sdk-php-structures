<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\CreateReservation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $capacity
 * @property \Aws\Api\DateTimeResult|null $endDate
 * @property ReservationOffering|null $offering
 * @property string|null $reservationArn
 * @property string|null $reservationId
 * @property \Aws\Api\DateTimeResult|null $startDate
 * @property string|null $status
 */
class Reservation extends Shape
{
    /**
     * @param array{
     *     capacity?: int|null,
     *     endDate?: \Aws\Api\DateTimeResult|null,
     *     offering?: ReservationOffering|null,
     *     reservationArn?: string|null,
     *     reservationId?: string|null,
     *     startDate?: \Aws\Api\DateTimeResult|null,
     *     status?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
