<?php

namespace Sunaoka\Aws\Structures\CleanRooms\UpdateIdMappingTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $idNamespaceAssociationId
 * @property 'SOURCE'|'TARGET' $type
 */
class IdMappingTableInputSource extends Shape
{
    /**
     * @param array{
     *     idNamespaceAssociationId: string,
     *     type: 'SOURCE'|'TARGET'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
