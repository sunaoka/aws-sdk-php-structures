<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\BatchWrite\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AttributeKey> $OrderedIndexedAttributeList
 * @property bool $IsUnique
 * @property ObjectReference|null $ParentReference
 * @property string|null $LinkName
 * @property string|null $BatchReferenceName
 */
class BatchCreateIndex extends Shape
{
    /**
     * @param array{
     *     OrderedIndexedAttributeList: list<AttributeKey>,
     *     IsUnique: bool,
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
