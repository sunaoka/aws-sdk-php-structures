<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $SelectedFields
 * @property 'ALL_FIELDS'|null $SelectedFieldOptions
 * @property list<ColumnIdentifier>|null $SelectedColumns
 */
class FilterOperationSelectedFieldsConfiguration extends Shape
{
    /**
     * @param array{
     *     SelectedFields?: list<string>|null,
     *     SelectedFieldOptions?: 'ALL_FIELDS'|null,
     *     SelectedColumns?: list<ColumnIdentifier>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
