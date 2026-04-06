<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SelectedSheetsFilterScopeConfiguration|null $SelectedSheets
 * @property AllSheetsFilterScopeConfiguration|null $AllSheets
 */
class FilterScopeConfiguration extends Shape
{
    /**
     * @param array{
     *     SelectedSheets?: SelectedSheetsFilterScopeConfiguration|null,
     *     AllSheets?: AllSheetsFilterScopeConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
