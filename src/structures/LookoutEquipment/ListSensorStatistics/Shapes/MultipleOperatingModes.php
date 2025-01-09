<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\ListSensorStatistics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'POTENTIAL_ISSUE_DETECTED'|'NO_ISSUE_DETECTED' $Status
 */
class MultipleOperatingModes extends Shape
{
    /**
     * @param array{Status: 'POTENTIAL_ISSUE_DETECTED'|'NO_ISSUE_DETECTED'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
