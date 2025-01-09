<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $SelectedFields
 * @property 'ALL_FIELDS' $SelectedFieldOptions
 * @property list<ColumnIdentifier> $SelectedColumns
 */
class FilterOperationSelectedFieldsConfiguration extends Shape
{
    /**
     * @param array{
     *     SelectedFields?: list<string>,
     *     SelectedFieldOptions?: 'ALL_FIELDS',
     *     SelectedColumns?: list<ColumnIdentifier>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
