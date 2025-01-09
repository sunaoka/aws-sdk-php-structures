<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\DescribeDataIngestionJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MissingCompleteSensorData $MissingCompleteSensorData
 * @property SensorsWithShortDateRange $SensorsWithShortDateRange
 */
class InsufficientSensorData extends Shape
{
    /**
     * @param array{
     *     MissingCompleteSensorData: MissingCompleteSensorData,
     *     SensorsWithShortDateRange: SensorsWithShortDateRange
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
