<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDataSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<UniqueKey> $UniqueKeys
 */
class PerformanceConfiguration extends Shape
{
    /**
     * @param array{UniqueKeys?: list<UniqueKey>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
