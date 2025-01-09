<?php

namespace Sunaoka\Aws\Structures\LakeFormation\ListDataCellsFilter\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TableCatalogId
 * @property string $DatabaseName
 * @property string $TableName
 * @property string $Name
 * @property RowFilter $RowFilter
 * @property list<string> $ColumnNames
 * @property ColumnWildcard $ColumnWildcard
 * @property string $VersionId
 */
class DataCellsFilter extends Shape
{
    /**
     * @param array{
     *     TableCatalogId: string,
     *     DatabaseName: string,
     *     TableName: string,
     *     Name: string,
     *     RowFilter?: RowFilter,
     *     ColumnNames?: list<string>,
     *     ColumnWildcard?: ColumnWildcard,
     *     VersionId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
