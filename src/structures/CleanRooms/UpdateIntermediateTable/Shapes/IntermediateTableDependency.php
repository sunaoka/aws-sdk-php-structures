<?php

namespace Sunaoka\Aws\Structures\CleanRooms\UpdateIntermediateTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $name
 * @property 'TABLE'|'INTERMEDIATE_TABLE'|'ID_MAPPING_TABLE' $type
 * @property 'DIRECT'|'INDIRECT' $parentType
 * @property string $creatorAccountId
 */
class IntermediateTableDependency extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     name: string,
     *     type: 'TABLE'|'INTERMEDIATE_TABLE'|'ID_MAPPING_TABLE',
     *     parentType: 'DIRECT'|'INDIRECT',
     *     creatorAccountId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
