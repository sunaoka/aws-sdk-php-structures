<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<SheetVisualScopingConfiguration>|null $SheetVisualScopingConfigurations
 */
class SelectedSheetsFilterScopeConfiguration extends Shape
{
    /**
     * @param array{SheetVisualScopingConfigurations?: list<SheetVisualScopingConfiguration>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
