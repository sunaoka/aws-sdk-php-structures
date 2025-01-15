<?php

namespace Sunaoka\Aws\Structures\DynamoDb\DescribeTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $LastIncreaseDateTime
 * @property \Aws\Api\DateTimeResult|null $LastDecreaseDateTime
 * @property int<1, max>|null $NumberOfDecreasesToday
 * @property int<0, max>|null $ReadCapacityUnits
 * @property int<0, max>|null $WriteCapacityUnits
 */
class ProvisionedThroughputDescription extends Shape
{
    /**
     * @param array{
     *     LastIncreaseDateTime?: \Aws\Api\DateTimeResult|null,
     *     LastDecreaseDateTime?: \Aws\Api\DateTimeResult|null,
     *     NumberOfDecreasesToday?: int<1, max>|null,
     *     ReadCapacityUnits?: int<0, max>|null,
     *     WriteCapacityUnits?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
