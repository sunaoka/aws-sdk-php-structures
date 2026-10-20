<?php

namespace Sunaoka\Aws\Structures\Rds\CancelDBCapacityReservation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBCapacityReservationIdentifier
 */
class CancelDBCapacityReservationRequest extends Request
{
    /**
     * @param array{DBCapacityReservationIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
