<?php

namespace Sunaoka\Aws\Structures\LakeFormation\GetDataCellsFilter\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TableCatalogId
 * @property string $DatabaseName
 * @property string $TableName
 * @property string $Name
 * @property RowFilter|null $RowFilter
 * @property list<string>|null $ColumnNames
 * @property ColumnWildcard|null $ColumnWildcard
 * @property string|null $VersionId
 */
class DataCellsFilter extends Shape
{
    /**
     * @param array{
     *     TableCatalogId: string,
     *     DatabaseName: string,
     *     TableName: string,
     *     Name: string,
     *     RowFilter?: RowFilter|null,
     *     ColumnNames?: list<string>|null,
     *     ColumnWildcard?: ColumnWildcard|null,
     *     VersionId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
