<?php

namespace Sunaoka\Aws\Structures\kendra\CreateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DocumentIdColumnName
 * @property string $DocumentDataColumnName
 * @property string|null $DocumentTitleColumnName
 * @property list<DataSourceToIndexFieldMapping>|null $FieldMappings
 * @property list<string> $ChangeDetectingColumns
 */
class ColumnConfiguration extends Shape
{
    /**
     * @param array{
     *     DocumentIdColumnName: string,
     *     DocumentDataColumnName: string,
     *     DocumentTitleColumnName?: string|null,
     *     FieldMappings?: list<DataSourceToIndexFieldMapping>|null,
     *     ChangeDetectingColumns: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
