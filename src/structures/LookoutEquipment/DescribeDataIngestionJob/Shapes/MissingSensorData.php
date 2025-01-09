<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\DescribeDataIngestionJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $AffectedSensorCount
 * @property int $TotalNumberOfMissingValues
 */
class MissingSensorData extends Shape
{
    /**
     * @param array{
     *     AffectedSensorCount: int,
     *     TotalNumberOfMissingValues: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
