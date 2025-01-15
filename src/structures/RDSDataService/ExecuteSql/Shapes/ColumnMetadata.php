<?php

namespace Sunaoka\Aws\Structures\RDSDataService\ExecuteSql\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property int|null $type
 * @property string|null $typeName
 * @property string|null $label
 * @property string|null $schemaName
 * @property string|null $tableName
 * @property bool|null $isAutoIncrement
 * @property bool|null $isSigned
 * @property bool|null $isCurrency
 * @property bool|null $isCaseSensitive
 * @property int|null $nullable
 * @property int|null $precision
 * @property int|null $scale
 * @property int|null $arrayBaseColumnType
 */
class ColumnMetadata extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     type?: int|null,
     *     typeName?: string|null,
     *     label?: string|null,
     *     schemaName?: string|null,
     *     tableName?: string|null,
     *     isAutoIncrement?: bool|null,
     *     isSigned?: bool|null,
     *     isCurrency?: bool|null,
     *     isCaseSensitive?: bool|null,
     *     nullable?: int|null,
     *     precision?: int|null,
     *     scale?: int|null,
     *     arrayBaseColumnType?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
