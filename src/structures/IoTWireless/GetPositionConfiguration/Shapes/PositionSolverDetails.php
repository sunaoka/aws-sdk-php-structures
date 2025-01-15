<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetPositionConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SemtechGnssDetail|null $SemtechGnss
 */
class PositionSolverDetails extends Shape
{
    /**
     * @param array{SemtechGnss?: SemtechGnssDetail|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
