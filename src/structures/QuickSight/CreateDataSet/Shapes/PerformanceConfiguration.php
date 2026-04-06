<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDataSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<UniqueKey>|null $UniqueKeys
 */
class PerformanceConfiguration extends Shape
{
    /**
     * @param array{UniqueKeys?: list<UniqueKey>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
