<?php

namespace Sunaoka\Aws\Structures\CleanRooms\ListIdNamespaceAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SOURCE'|'TARGET' $idNamespaceType
 */
class IdNamespaceAssociationInputReferencePropertiesSummary extends Shape
{
    /**
     * @param array{idNamespaceType: 'SOURCE'|'TARGET'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
