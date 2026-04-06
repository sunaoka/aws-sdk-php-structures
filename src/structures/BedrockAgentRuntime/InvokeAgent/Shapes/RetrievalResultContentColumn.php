<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $columnName
 * @property string|null $columnValue
 * @property 'BLOB'|'BOOLEAN'|'DOUBLE'|'NULL'|'LONG'|'STRING'|null $type
 */
class RetrievalResultContentColumn extends Shape
{
    /**
     * @param array{
     *     columnName?: string|null,
     *     columnValue?: string|null,
     *     type?: 'BLOB'|'BOOLEAN'|'DOUBLE'|'NULL'|'LONG'|'STRING'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
