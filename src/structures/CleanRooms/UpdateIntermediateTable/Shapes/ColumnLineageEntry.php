<?php

namespace Sunaoka\Aws\Structures\CleanRooms\UpdateIntermediateTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $column
 * @property string $sourceColumn
 * @property string $sourceName
 * @property string $sourceId
 * @property 'TABLE'|'INTERMEDIATE_TABLE'|'ID_MAPPING_TABLE' $sourceType
 * @property string $sourceAccountId
 */
class ColumnLineageEntry extends Shape
{
    /**
     * @param array{
     *     column: string,
     *     sourceColumn: string,
     *     sourceName: string,
     *     sourceId: string,
     *     sourceType: 'TABLE'|'INTERMEDIATE_TABLE'|'ID_MAPPING_TABLE',
     *     sourceAccountId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
