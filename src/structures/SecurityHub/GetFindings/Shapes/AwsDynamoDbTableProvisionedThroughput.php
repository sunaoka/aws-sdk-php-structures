<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $LastDecreaseDateTime
 * @property string $LastIncreaseDateTime
 * @property int $NumberOfDecreasesToday
 * @property int $ReadCapacityUnits
 * @property int $WriteCapacityUnits
 */
class AwsDynamoDbTableProvisionedThroughput extends Shape
{
    /**
     * @param array{
     *     LastDecreaseDateTime?: string,
     *     LastIncreaseDateTime?: string,
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
