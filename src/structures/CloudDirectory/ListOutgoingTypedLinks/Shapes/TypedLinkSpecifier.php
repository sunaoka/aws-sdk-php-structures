<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\ListOutgoingTypedLinks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TypedLinkSchemaAndFacetName $TypedLinkFacet
 * @property ObjectReference $SourceObjectReference
 * @property ObjectReference $TargetObjectReference
 * @property list<AttributeNameAndValue> $IdentityAttributeValues
 */
class TypedLinkSpecifier extends Shape
{
    /**
     * @param array{
     *     TypedLinkFacet: TypedLinkSchemaAndFacetName,
     *     SourceObjectReference: ObjectReference,
     *     TargetObjectReference: ObjectReference,
     *     IdentityAttributeValues: list<AttributeNameAndValue>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
