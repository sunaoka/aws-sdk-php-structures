<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $columnName
 * @property string $columnValue
 * @property 'BLOB'|'BOOLEAN'|'DOUBLE'|'NULL'|'LONG'|'STRING' $type
 */
class RetrievalResultContentColumn extends Shape
{
    /**
     * @param array{
     *     columnName?: string,
     *     columnValue?: string,
     *     type?: 'BLOB'|'BOOLEAN'|'DOUBLE'|'NULL'|'LONG'|'STRING'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
