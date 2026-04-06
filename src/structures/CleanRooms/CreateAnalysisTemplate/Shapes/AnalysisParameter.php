<?php

namespace Sunaoka\Aws\Structures\CleanRooms\CreateAnalysisTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property 'SMALLINT'|'INTEGER'|'BIGINT'|'DECIMAL'|'REAL'|'DOUBLE_PRECISION'|'BOOLEAN'|'CHAR'|'VARCHAR'|'DATE'|'TIMESTAMP'|'TIMESTAMPTZ'|'TIME'|'TIMETZ'|'VARBYTE' $type
 * @property string|null $defaultValue
 */
class AnalysisParameter extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     type: 'SMALLINT'|'INTEGER'|'BIGINT'|'DECIMAL'|'REAL'|'DOUBLE_PRECISION'|'BOOLEAN'|'CHAR'|'VARCHAR'|'DATE'|'TIMESTAMP'|'TIMESTAMPTZ'|'TIME'|'TIMETZ'|'VARBYTE',
     *     defaultValue?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
