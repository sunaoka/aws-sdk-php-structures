<?php

namespace Sunaoka\Aws\Structures\Athena\DeleteCapacityReservation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 */
class DeleteCapacityReservationRequest extends Request
{
    /**
     * @param array{Name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
