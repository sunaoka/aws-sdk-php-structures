<?php

namespace Sunaoka\Aws\Structures\IoTWireless\ListPositionConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SemtechGnssDetail $SemtechGnss
 */
class PositionSolverDetails extends Shape
{
    /**
     * @param array{SemtechGnss?: SemtechGnssDetail} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
