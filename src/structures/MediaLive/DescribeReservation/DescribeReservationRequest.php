<?php

namespace Sunaoka\Aws\Structures\MediaLive\DescribeReservation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ReservationId
 */
class DescribeReservationRequest extends Request
{
    /**
     * @param array{ReservationId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
