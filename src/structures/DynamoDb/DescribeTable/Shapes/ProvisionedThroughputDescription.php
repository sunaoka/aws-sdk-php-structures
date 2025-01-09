<?php

namespace Sunaoka\Aws\Structures\DynamoDb\DescribeTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $LastIncreaseDateTime
 * @property \Aws\Api\DateTimeResult $LastDecreaseDateTime
 * @property int<1, max> $NumberOfDecreasesToday
 * @property int<0, max> $ReadCapacityUnits
 * @property int<0, max> $WriteCapacityUnits
 */
class ProvisionedThroughputDescription extends Shape
{
    /**
     * @param array{
     *     LastIncreaseDateTime?: \Aws\Api\DateTimeResult,
     *     LastDecreaseDateTime?: \Aws\Api\DateTimeResult,
     *     NumberOfDecreasesToday?: int<1, max>,
     *     ReadCapacityUnits?: int<0, max>,
     *     WriteCapacityUnits?: int<0, max>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
