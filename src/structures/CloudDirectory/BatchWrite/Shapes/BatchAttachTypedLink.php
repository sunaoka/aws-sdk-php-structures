<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\BatchWrite\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ObjectReference $SourceObjectReference
 * @property ObjectReference $TargetObjectReference
 * @property TypedLinkSchemaAndFacetName $TypedLinkFacet
 * @property list<AttributeNameAndValue> $Attributes
 */
class BatchAttachTypedLink extends Shape
{
    /**
     * @param array{
     *     SourceObjectReference: ObjectReference,
     *     TargetObjectReference: ObjectReference,
     *     TypedLinkFacet: TypedLinkSchemaAndFacetName,
     *     Attributes: list<AttributeNameAndValue>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
