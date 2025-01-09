<?php

namespace Sunaoka\Aws\Structures\CleanRooms\BatchGetCollaborationAnalysisTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property 'SMALLINT'|'INTEGER'|'BIGINT'|'DECIMAL'|'REAL'|'DOUBLE_PRECISION'|'BOOLEAN'|'CHAR'|'VARCHAR'|'DATE'|'TIMESTAMP'|'TIMESTAMPTZ'|'TIME'|'TIMETZ'|'VARBYTE'|'BINARY'|'BYTE'|'CHARACTER'|'DOUBLE'|'FLOAT'|'INT'|'LONG'|'NUMERIC'|'SHORT'|'STRING'|'TIMESTAMP_LTZ'|'TIMESTAMP_NTZ'|'TINYINT' $type
 * @property string $defaultValue
 */
class AnalysisParameter extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     type: 'SMALLINT'|'INTEGER'|'BIGINT'|'DECIMAL'|'REAL'|'DOUBLE_PRECISION'|'BOOLEAN'|'CHAR'|'VARCHAR'|'DATE'|'TIMESTAMP'|'TIMESTAMPTZ'|'TIME'|'TIMETZ'|'VARBYTE'|'BINARY'|'BYTE'|'CHARACTER'|'DOUBLE'|'FLOAT'|'INT'|'LONG'|'NUMERIC'|'SHORT'|'STRING'|'TIMESTAMP_LTZ'|'TIMESTAMP_NTZ'|'TINYINT',
     *     defaultValue?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
