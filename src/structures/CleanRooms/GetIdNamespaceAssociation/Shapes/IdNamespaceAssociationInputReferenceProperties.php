<?php

namespace Sunaoka\Aws\Structures\CleanRooms\GetIdNamespaceAssociation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SOURCE'|'TARGET' $idNamespaceType
 * @property list<Document> $idMappingWorkflowsSupported
 */
class IdNamespaceAssociationInputReferenceProperties extends Shape
{
    /**
     * @param array{
     *     idNamespaceType: 'SOURCE'|'TARGET',
     *     idMappingWorkflowsSupported: list<Document>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
