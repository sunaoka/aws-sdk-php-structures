<?php

namespace Sunaoka\Aws\Structures\MediaConnect\DescribeReservation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ReservationArn
 */
class DescribeReservationRequest extends Request
{
    /**
     * @param array{ReservationArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
