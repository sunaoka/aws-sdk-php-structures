<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\CreateObject;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DirectoryArn
 * @property list<Shapes\SchemaFacet> $SchemaFacets
 * @property list<Shapes\AttributeKeyAndValue> $ObjectAttributeList
 * @property Shapes\ObjectReference $ParentReference
 * @property string $LinkName
 */
class CreateObjectRequest extends Request
{
    /**
     * @param array{
     *     DirectoryArn: string,
     *     SchemaFacets: list<Shapes\SchemaFacet>,
     *     ObjectAttributeList?: list<Shapes\AttributeKeyAndValue>,
     *     ParentReference?: Shapes\ObjectReference,
     *     LinkName?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
