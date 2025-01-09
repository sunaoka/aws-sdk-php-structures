<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\BatchWrite\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AttributeKey> $OrderedIndexedAttributeList
 * @property bool $IsUnique
 * @property ObjectReference $ParentReference
 * @property string $LinkName
 * @property string $BatchReferenceName
 */
class BatchCreateIndex extends Shape
{
    /**
     * @param array{
     *     OrderedIndexedAttributeList: list<AttributeKey>,
     *     IsUnique: bool,
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
