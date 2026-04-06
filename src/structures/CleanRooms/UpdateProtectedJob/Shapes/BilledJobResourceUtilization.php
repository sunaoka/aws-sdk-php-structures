<?php

namespace Sunaoka\Aws\Structures\CleanRooms\UpdateProtectedJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $units
 */
class BilledJobResourceUtilization extends Shape
{
    /**
     * @param array{units: double} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
