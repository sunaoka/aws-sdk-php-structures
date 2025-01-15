<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\BatchWrite\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<SchemaFacet> $SchemaFacet
 * @property list<AttributeKeyAndValue> $ObjectAttributeList
 * @property ObjectReference|null $ParentReference
 * @property string|null $LinkName
 * @property string|null $BatchReferenceName
 */
class BatchCreateObject extends Shape
{
    /**
     * @param array{
     *     SchemaFacet: list<SchemaFacet>,
     *     ObjectAttributeList: list<AttributeKeyAndValue>,
     *     ParentReference?: ObjectReference|null,
     *     LinkName?: string|null,
     *     BatchReferenceName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
