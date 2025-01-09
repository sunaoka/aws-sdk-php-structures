<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\BatchWrite\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<SchemaFacet> $SchemaFacet
 * @property list<AttributeKeyAndValue> $ObjectAttributeList
 * @property ObjectReference $ParentReference
 * @property string $LinkName
 * @property string $BatchReferenceName
 */
class BatchCreateObject extends Shape
{
    /**
     * @param array{
     *     SchemaFacet: list<SchemaFacet>,
     *     ObjectAttributeList: list<AttributeKeyAndValue>,
     *     ParentReference?: ObjectReference,
     *     LinkName?: string,
     *     BatchReferenceName?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
