<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\ListSensorStatistics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'POTENTIAL_ISSUE_DETECTED'|'NO_ISSUE_DETECTED' $Status
 * @property int $NumberOfCategory
 */
class CategoricalValues extends Shape
{
    /**
     * @param array{
     *     Status: 'POTENTIAL_ISSUE_DETECTED'|'NO_ISSUE_DETECTED',
     *     NumberOfCategory?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
