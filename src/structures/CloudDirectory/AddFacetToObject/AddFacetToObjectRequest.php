<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\AddFacetToObject;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DirectoryArn
 * @property Shapes\SchemaFacet $SchemaFacet
 * @property list<Shapes\AttributeKeyAndValue>|null $ObjectAttributeList
 * @property Shapes\ObjectReference $ObjectReference
 */
class AddFacetToObjectRequest extends Request
{
    /**
     * @param array{
     *     DirectoryArn: string,
     *     SchemaFacet: Shapes\SchemaFacet,
     *     ObjectAttributeList?: list<Shapes\AttributeKeyAndValue>|null,
     *     ObjectReference: Shapes\ObjectReference
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
