<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAnalysisDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SelectedSheetsFilterScopeConfiguration|null $SelectedSheets
 */
class FilterScopeConfiguration extends Shape
{
    /**
     * @param array{SelectedSheets?: SelectedSheetsFilterScopeConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
