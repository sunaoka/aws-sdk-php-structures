<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<SheetVisualScopingConfiguration> $SheetVisualScopingConfigurations
 */
class SelectedSheetsFilterScopeConfiguration extends Shape
{
    /**
     * @param array{SheetVisualScopingConfigurations?: list<SheetVisualScopingConfiguration>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
