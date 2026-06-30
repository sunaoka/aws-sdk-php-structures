<?php

namespace Sunaoka\Aws\Structures\CleanRooms\UpdateIntermediateTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $id
 * @property 'TABLE'|'INTERMEDIATE_TABLE'|'ID_MAPPING_TABLE' $type
 * @property 'ALLOWED'|'REQUIRED'|'NOT_ALLOWED' $value
 * @property string $sourceAccountId
 */
class InheritedAdditionalAnalysesSource extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     id: string,
     *     type: 'TABLE'|'INTERMEDIATE_TABLE'|'ID_MAPPING_TABLE',
     *     value: 'ALLOWED'|'REQUIRED'|'NOT_ALLOWED',
     *     sourceAccountId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
