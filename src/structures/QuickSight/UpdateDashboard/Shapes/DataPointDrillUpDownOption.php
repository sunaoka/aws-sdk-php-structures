<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED' $AvailabilityStatus
 */
class DataPointDrillUpDownOption extends Shape
{
    /**
     * @param array{AvailabilityStatus?: 'ENABLED'|'DISABLED'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
