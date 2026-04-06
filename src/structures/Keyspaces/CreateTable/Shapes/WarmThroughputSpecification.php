<?php

namespace Sunaoka\Aws\Structures\Keyspaces\CreateTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, max>|null $readUnitsPerSecond
 * @property int<1, max>|null $writeUnitsPerSecond
 */
class WarmThroughputSpecification extends Shape
{
    /**
     * @param array{
     *     readUnitsPerSecond?: int<1, max>|null,
     *     writeUnitsPerSecond?: int<1, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
