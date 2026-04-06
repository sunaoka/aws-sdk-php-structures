<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FilterId
 * @property ColumnIdentifier $Column
 * @property CategoryFilterConfiguration $Configuration
 * @property DefaultFilterControlConfiguration|null $DefaultFilterControlConfiguration
 */
class CategoryFilter extends Shape
{
    /**
     * @param array{
     *     FilterId: string,
     *     Column: ColumnIdentifier,
     *     Configuration: CategoryFilterConfiguration,
     *     DefaultFilterControlConfiguration?: DefaultFilterControlConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
