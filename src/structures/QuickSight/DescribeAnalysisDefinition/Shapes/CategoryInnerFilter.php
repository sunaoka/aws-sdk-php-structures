<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAnalysisDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ColumnIdentifier $Column
 * @property CategoryFilterConfiguration $Configuration
 * @property DefaultFilterControlConfiguration|null $DefaultFilterControlConfiguration
 */
class CategoryInnerFilter extends Shape
{
    /**
     * @param array{
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
