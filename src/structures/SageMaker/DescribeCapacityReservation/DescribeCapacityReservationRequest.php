<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeCapacityReservation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SMCapacityReservationArn
 */
class DescribeCapacityReservationRequest extends Request
{
    /**
     * @param array{SMCapacityReservationArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
