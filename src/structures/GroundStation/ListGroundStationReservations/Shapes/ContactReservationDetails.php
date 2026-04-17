<?php

namespace Sunaoka\Aws\Structures\GroundStation\ListGroundStationReservations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $contactId
 */
class ContactReservationDetails extends Shape
{
    /**
     * @param array{contactId?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
