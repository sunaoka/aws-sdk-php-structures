<?php

namespace Sunaoka\Aws\Structures\CleanRooms\BatchGetSchema\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property IdMappingTableSchemaTypeProperties|null $idMappingTable
 * @property IntermediateTableSchemaTypeProperties|null $intermediateTable
 * @property ConfiguredTableAssociationSchemaTypeProperties|null $configuredTableAssociation
 */
class SchemaTypeProperties extends Shape
{
    /**
     * @param array{
     *     idMappingTable?: IdMappingTableSchemaTypeProperties|null,
     *     intermediateTable?: IntermediateTableSchemaTypeProperties|null,
     *     configuredTableAssociation?: ConfiguredTableAssociationSchemaTypeProperties|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
