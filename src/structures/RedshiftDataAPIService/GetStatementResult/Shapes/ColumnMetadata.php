<?php

namespace Sunaoka\Aws\Structures\RedshiftDataAPIService\GetStatementResult\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $columnDefault
 * @property bool $isCaseSensitive
 * @property bool $isCurrency
 * @property bool $isSigned
 * @property string $label
 * @property int $length
 * @property string $name
 * @property int $nullable
 * @property int $precision
 * @property int $scale
 * @property string $schemaName
 * @property string $tableName
 * @property string $typeName
 */
class ColumnMetadata extends Shape
{
    /**
     * @param array{
     *     columnDefault?: string,
     *     isCaseSensitive?: bool,
     *     isCurrency?: bool,
     *     isSigned?: bool,
     *     label?: string,
     *     length?: int,
     *     name?: string,
     *     nullable?: int,
     *     precision?: int,
     *     scale?: int,
     *     schemaName?: string,
     *     tableName?: string,
     *     typeName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
