<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\DescribeDataset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $AffectedSensorCount
 */
class SensorsWithShortDateRange extends Shape
{
    /**
     * @param array{AffectedSensorCount: int} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
