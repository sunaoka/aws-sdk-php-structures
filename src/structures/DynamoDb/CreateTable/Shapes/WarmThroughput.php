<?php

namespace Sunaoka\Aws\Structures\DynamoDb\CreateTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $ReadUnitsPerSecond
 * @property int $WriteUnitsPerSecond
 */
class WarmThroughput extends Shape
{
    /**
     * @param array{
     *     ReadUnitsPerSecond?: int,
     *     WriteUnitsPerSecond?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
