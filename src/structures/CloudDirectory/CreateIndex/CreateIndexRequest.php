<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\CreateIndex;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DirectoryArn
 * @property list<Shapes\AttributeKey> $OrderedIndexedAttributeList
 * @property bool $IsUnique
 * @property Shapes\ObjectReference $ParentReference
 * @property string $LinkName
 */
class CreateIndexRequest extends Request
{
    /**
     * @param array{
     *     DirectoryArn: string,
     *     OrderedIndexedAttributeList: list<Shapes\AttributeKey>,
     *     IsUnique: bool,
     *     ParentReference?: Shapes\ObjectReference,
     *     LinkName?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
