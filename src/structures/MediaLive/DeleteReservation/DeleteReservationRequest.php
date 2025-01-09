<?php

namespace Sunaoka\Aws\Structures\MediaLive\DeleteReservation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ReservationId
 */
class DeleteReservationRequest extends Request
{
    /**
     * @param array{ReservationId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
