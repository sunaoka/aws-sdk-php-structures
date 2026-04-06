<?php

namespace Sunaoka\Aws\Structures\CleanRooms\BatchGetSchemaAnalysisRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property 'AGGREGATION'|'LIST'|'CUSTOM'|'ID_MAPPING_TABLE' $type
 * @property string $code
 * @property string $message
 */
class BatchGetSchemaAnalysisRuleError extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     type: 'AGGREGATION'|'LIST'|'CUSTOM'|'ID_MAPPING_TABLE',
     *     code: string,
     *     message: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
