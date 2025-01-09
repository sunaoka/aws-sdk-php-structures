<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\BatchRead\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ObjectReference $ObjectReference
 * @property SchemaFacet $SchemaFacet
 * @property list<string> $AttributeNames
 */
class BatchGetObjectAttributes extends Shape
{
    /**
     * @param array{
     *     ObjectReference: ObjectReference,
     *     SchemaFacet: SchemaFacet,
     *     AttributeNames: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
