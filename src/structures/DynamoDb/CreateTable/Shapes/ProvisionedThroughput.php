<?php

namespace Sunaoka\Aws\Structures\DynamoDb\CreateTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $ReadCapacityUnits
 * @property int $WriteCapacityUnits
 */
class ProvisionedThroughput extends Shape
{
    /**
     * @param array{
     *     ReadCapacityUnits: int,
     *     WriteCapacityUnits: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
