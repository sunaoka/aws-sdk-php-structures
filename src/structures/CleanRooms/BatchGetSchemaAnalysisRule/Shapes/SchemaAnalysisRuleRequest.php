<?php

namespace Sunaoka\Aws\Structures\CleanRooms\BatchGetSchemaAnalysisRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property 'AGGREGATION'|'LIST'|'CUSTOM'|'ID_MAPPING_TABLE' $type
 */
class SchemaAnalysisRuleRequest extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     type: 'AGGREGATION'|'LIST'|'CUSTOM'|'ID_MAPPING_TABLE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
