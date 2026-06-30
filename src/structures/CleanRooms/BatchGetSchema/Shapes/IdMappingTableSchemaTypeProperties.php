<?php

namespace Sunaoka\Aws\Structures\CleanRooms\BatchGetSchema\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<IdMappingTableInputSource> $idMappingTableInputSource
 * @property string|null $idMappingTableId
 */
class IdMappingTableSchemaTypeProperties extends Shape
{
    /**
     * @param array{
     *     idMappingTableInputSource: list<IdMappingTableInputSource>,
     *     idMappingTableId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
