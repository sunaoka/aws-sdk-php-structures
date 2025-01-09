<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\BatchWrite\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SchemaFacet $SchemaFacet
 * @property list<AttributeKeyAndValue> $ObjectAttributeList
 * @property ObjectReference $ObjectReference
 */
class BatchAddFacetToObject extends Shape
{
    /**
     * @param array{
     *     SchemaFacet: SchemaFacet,
     *     ObjectAttributeList: list<AttributeKeyAndValue>,
     *     ObjectReference: ObjectReference
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
