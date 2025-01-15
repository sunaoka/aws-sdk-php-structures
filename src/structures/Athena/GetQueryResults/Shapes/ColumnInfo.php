<?php

namespace Sunaoka\Aws\Structures\Athena\GetQueryResults\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CatalogName
 * @property string|null $SchemaName
 * @property string|null $TableName
 * @property string $Name
 * @property string|null $Label
 * @property string $Type
 * @property int|null $Precision
 * @property int|null $Scale
 * @property 'NOT_NULL'|'NULLABLE'|'UNKNOWN'|null $Nullable
 * @property bool|null $CaseSensitive
 */
class ColumnInfo extends Shape
{
    /**
     * @param array{
     *     CatalogName?: string|null,
     *     SchemaName?: string|null,
     *     TableName?: string|null,
     *     Name: string,
     *     Label?: string|null,
     *     Type: string,
     *     Precision?: int|null,
     *     Scale?: int|null,
     *     Nullable?: 'NOT_NULL'|'NULLABLE'|'UNKNOWN'|null,
     *     CaseSensitive?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
