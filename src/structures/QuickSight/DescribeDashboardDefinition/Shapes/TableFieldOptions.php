<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<TableFieldOption> $SelectedFieldOptions
 * @property list<string> $Order
 * @property TablePinnedFieldOptions $PinnedFieldOptions
 */
class TableFieldOptions extends Shape
{
    /**
     * @param array{
     *     SelectedFieldOptions?: list<TableFieldOption>,
     *     Order?: list<string>,
     *     PinnedFieldOptions?: TablePinnedFieldOptions
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
