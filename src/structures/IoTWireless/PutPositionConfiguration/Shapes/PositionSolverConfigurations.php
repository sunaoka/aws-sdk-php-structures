<?php

namespace Sunaoka\Aws\Structures\IoTWireless\PutPositionConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SemtechGnssConfiguration $SemtechGnss
 */
class PositionSolverConfigurations extends Shape
{
    /**
     * @param array{SemtechGnss?: SemtechGnssConfiguration} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
