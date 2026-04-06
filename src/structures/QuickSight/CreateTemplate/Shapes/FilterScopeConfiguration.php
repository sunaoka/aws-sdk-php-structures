<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTemplate\Shapes;

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
