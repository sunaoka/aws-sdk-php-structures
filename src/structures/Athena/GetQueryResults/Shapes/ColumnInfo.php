<?php

namespace Sunaoka\Aws\Structures\Athena\GetQueryResults\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CatalogName
 * @property string $SchemaName
 * @property string $TableName
 * @property string $Name
 * @property string $Label
 * @property string $Type
 * @property int $Precision
 * @property int $Scale
 * @property 'NOT_NULL'|'NULLABLE'|'UNKNOWN' $Nullable
 * @property bool $CaseSensitive
 */
class ColumnInfo extends Shape
{
    /**
     * @param array{
     *     CatalogName?: string,
     *     SchemaName?: string,
     *     TableName?: string,
     *     Name: string,
     *     Label?: string,
     *     Type: string,
     *     Precision?: int,
     *     Scale?: int,
     *     Nullable?: 'NOT_NULL'|'NULLABLE'|'UNKNOWN',
     *     CaseSensitive?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
