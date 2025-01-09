<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ExplicitHierarchy $ExplicitHierarchy
 * @property DateTimeHierarchy $DateTimeHierarchy
 * @property PredefinedHierarchy $PredefinedHierarchy
 */
class ColumnHierarchy extends Shape
{
    /**
     * @param array{
     *     ExplicitHierarchy?: ExplicitHierarchy,
     *     DateTimeHierarchy?: DateTimeHierarchy,
     *     PredefinedHierarchy?: PredefinedHierarchy
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
