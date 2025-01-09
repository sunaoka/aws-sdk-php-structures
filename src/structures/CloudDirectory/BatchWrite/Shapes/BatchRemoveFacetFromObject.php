<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\BatchWrite\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SchemaFacet $SchemaFacet
 * @property ObjectReference $ObjectReference
 */
class BatchRemoveFacetFromObject extends Shape
{
    /**
     * @param array{
     *     SchemaFacet: SchemaFacet,
     *     ObjectReference: ObjectReference
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
