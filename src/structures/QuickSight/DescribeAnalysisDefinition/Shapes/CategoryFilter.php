<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAnalysisDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FilterId
 * @property ColumnIdentifier $Column
 * @property CategoryFilterConfiguration $Configuration
 * @property DefaultFilterControlConfiguration $DefaultFilterControlConfiguration
 */
class CategoryFilter extends Shape
{
    /**
     * @param array{
     *     FilterId: string,
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
