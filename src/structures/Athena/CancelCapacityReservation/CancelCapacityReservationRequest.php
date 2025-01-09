<?php

namespace Sunaoka\Aws\Structures\Athena\CancelCapacityReservation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 */
class CancelCapacityReservationRequest extends Request
{
    /**
     * @param array{Name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
