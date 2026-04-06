<?php

namespace Sunaoka\Aws\Structures\CleanRooms\GetProtectedQuery\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $units
 */
class BilledResourceUtilization extends Shape
{
    /**
     * @param array{units: double} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
