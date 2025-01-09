<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SelectedSheetsFilterScopeConfiguration $SelectedSheets
 * @property AllSheetsFilterScopeConfiguration $AllSheets
 */
class FilterScopeConfiguration extends Shape
{
    /**
     * @param array{
     *     SelectedSheets?: SelectedSheetsFilterScopeConfiguration,
     *     AllSheets?: AllSheetsFilterScopeConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
