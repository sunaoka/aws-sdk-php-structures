<?php

namespace Sunaoka\Aws\Structures\RedshiftDataAPIService\GetStatementResultV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $isCaseSensitive
 * @property bool|null $isCurrency
 * @property bool|null $isSigned
 * @property string|null $label
 * @property string|null $name
 * @property int|null $nullable
 * @property int|null $precision
 * @property int|null $scale
 * @property string|null $schemaName
 * @property string|null $tableName
 * @property string|null $typeName
 * @property int|null $length
 * @property string|null $columnDefault
 */
class ColumnMetadata extends Shape
{
    /**
     * @param array{
     *     isCaseSensitive?: bool|null,
     *     isCurrency?: bool|null,
     *     isSigned?: bool|null,
     *     label?: string|null,
     *     name?: string|null,
     *     nullable?: int|null,
     *     precision?: int|null,
     *     scale?: int|null,
     *     schemaName?: string|null,
     *     tableName?: string|null,
     *     typeName?: string|null,
     *     length?: int|null,
     *     columnDefault?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
