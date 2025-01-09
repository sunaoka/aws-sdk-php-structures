<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\DescribeDataset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $AffectedSensorCount
 * @property int $TotalNumberOfInvalidValues
 */
class InvalidSensorData extends Shape
{
    /**
     * @param array{
     *     AffectedSensorCount: int,
     *     TotalNumberOfInvalidValues: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
