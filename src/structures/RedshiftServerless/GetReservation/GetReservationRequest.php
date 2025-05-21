<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\GetReservation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $reservationId
 */
class GetReservationRequest extends Request
{
    /**
     * @param array{reservationId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
