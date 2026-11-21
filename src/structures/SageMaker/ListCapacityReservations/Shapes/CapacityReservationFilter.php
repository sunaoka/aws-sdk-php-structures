<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListCapacityReservations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Status' $Name
 * @property list<string> $Values
 */
class CapacityReservationFilter extends Shape
{
    /**
     * @param array{
     *     Name: 'Status',
     *     Values: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
