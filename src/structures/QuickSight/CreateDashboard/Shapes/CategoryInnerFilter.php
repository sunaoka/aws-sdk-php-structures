<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ColumnIdentifier $Column
 * @property CategoryFilterConfiguration $Configuration
 * @property DefaultFilterControlConfiguration $DefaultFilterControlConfiguration
 */
class CategoryInnerFilter extends Shape
{
    /**
     * @param array{
     *     Column: ColumnIdentifier,
     *     Configuration: CategoryFilterConfiguration,
     *     DefaultFilterControlConfiguration?: DefaultFilterControlConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
