<?php

namespace Sunaoka\Aws\Structures\DynamoDb\CreateTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $ReadUnitsPerSecond
 * @property int|null $WriteUnitsPerSecond
 */
class WarmThroughput extends Shape
{
    /**
     * @param array{
     *     ReadUnitsPerSecond?: int|null,
     *     WriteUnitsPerSecond?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
