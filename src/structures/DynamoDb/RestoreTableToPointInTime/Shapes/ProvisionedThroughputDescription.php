<?php

namespace Sunaoka\Aws\Structures\DynamoDb\RestoreTableToPointInTime\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $LastIncreaseDateTime
 * @property \Aws\Api\DateTimeResult $LastDecreaseDateTime
 * @property int $NumberOfDecreasesToday
 * @property int $ReadCapacityUnits
 * @property int $WriteCapacityUnits
 */
class ProvisionedThroughputDescription extends Shape
{
    /**
     * @param array{
     *     LastIncreaseDateTime?: \Aws\Api\DateTimeResult,
     *     LastDecreaseDateTime?: \Aws\Api\DateTimeResult,
     *     NumberOfDecreasesToday?: int,
     *     ReadCapacityUnits?: int,
     *     WriteCapacityUnits?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
