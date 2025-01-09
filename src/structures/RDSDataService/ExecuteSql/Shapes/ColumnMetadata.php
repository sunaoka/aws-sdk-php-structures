<?php

namespace Sunaoka\Aws\Structures\RDSDataService\ExecuteSql\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property int $type
 * @property string $typeName
 * @property string $label
 * @property string $schemaName
 * @property string $tableName
 * @property bool $isAutoIncrement
 * @property bool $isSigned
 * @property bool $isCurrency
 * @property bool $isCaseSensitive
 * @property int $nullable
 * @property int $precision
 * @property int $scale
 * @property int $arrayBaseColumnType
 */
class ColumnMetadata extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     type?: int,
     *     typeName?: string,
     *     label?: string,
     *     schemaName?: string,
     *     tableName?: string,
     *     isAutoIncrement?: bool,
     *     isSigned?: bool,
     *     isCurrency?: bool,
     *     isCaseSensitive?: bool,
     *     nullable?: int,
     *     precision?: int,
     *     scale?: int,
     *     arrayBaseColumnType?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
