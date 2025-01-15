<?php

namespace Sunaoka\Aws\Structures\CleanRooms\GetSchema\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property IdMappingTableSchemaTypeProperties|null $idMappingTable
 */
class SchemaTypeProperties extends Shape
{
    /**
     * @param array{idMappingTable?: IdMappingTableSchemaTypeProperties|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
