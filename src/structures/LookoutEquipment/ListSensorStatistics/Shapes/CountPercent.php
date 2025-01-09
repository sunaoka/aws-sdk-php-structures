<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\ListSensorStatistics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Count
 * @property float $Percentage
 */
class CountPercent extends Shape
{
    /**
     * @param array{
     *     Count: int,
     *     Percentage: float
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
