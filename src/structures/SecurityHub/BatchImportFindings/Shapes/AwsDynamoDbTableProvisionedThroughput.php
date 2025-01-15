<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $LastDecreaseDateTime
 * @property string|null $LastIncreaseDateTime
 * @property int|null $NumberOfDecreasesToday
 * @property int|null $ReadCapacityUnits
 * @property int|null $WriteCapacityUnits
 */
class AwsDynamoDbTableProvisionedThroughput extends Shape
{
    /**
     * @param array{
     *     LastDecreaseDateTime?: string|null,
     *     LastIncreaseDateTime?: string|null,
     *     NumberOfDecreasesToday?: int|null,
     *     ReadCapacityUnits?: int|null,
     *     WriteCapacityUnits?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
