<?php

namespace Sunaoka\Aws\Structures\CleanRooms\GetSchema\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<IdMappingTableInputSource> $idMappingTableInputSource
 */
class IdMappingTableSchemaTypeProperties extends Shape
{
    /**
     * @param array{idMappingTableInputSource: list<IdMappingTableInputSource>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
