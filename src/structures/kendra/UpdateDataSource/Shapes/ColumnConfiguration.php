<?php

namespace Sunaoka\Aws\Structures\kendra\UpdateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DocumentIdColumnName
 * @property string $DocumentDataColumnName
 * @property string $DocumentTitleColumnName
 * @property list<DataSourceToIndexFieldMapping> $FieldMappings
 * @property list<string> $ChangeDetectingColumns
 */
class ColumnConfiguration extends Shape
{
    /**
     * @param array{
     *     DocumentIdColumnName: string,
     *     DocumentDataColumnName: string,
     *     DocumentTitleColumnName?: string,
     *     FieldMappings?: list<DataSourceToIndexFieldMapping>,
     *     ChangeDetectingColumns: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
