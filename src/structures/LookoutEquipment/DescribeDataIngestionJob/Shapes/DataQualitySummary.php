<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\DescribeDataIngestionJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property InsufficientSensorData $InsufficientSensorData
 * @property MissingSensorData $MissingSensorData
 * @property InvalidSensorData $InvalidSensorData
 * @property UnsupportedTimestamps $UnsupportedTimestamps
 * @property DuplicateTimestamps $DuplicateTimestamps
 */
class DataQualitySummary extends Shape
{
    /**
     * @param array{
     *     InsufficientSensorData: InsufficientSensorData,
     *     MissingSensorData: MissingSensorData,
     *     InvalidSensorData: InvalidSensorData,
     *     UnsupportedTimestamps: UnsupportedTimestamps,
     *     DuplicateTimestamps: DuplicateTimestamps
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
