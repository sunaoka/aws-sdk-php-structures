<?php

namespace Sunaoka\Aws\Structures\CleanRooms\CreateIdMappingTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<IdMappingTableInputSource> $idMappingTableInputSource
 */
class IdMappingTableInputReferenceProperties extends Shape
{
    /**
     * @param array{idMappingTableInputSource: list<IdMappingTableInputSource>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
