<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\CreateObject;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DirectoryArn
 * @property list<Shapes\SchemaFacet> $SchemaFacets
 * @property list<Shapes\AttributeKeyAndValue>|null $ObjectAttributeList
 * @property Shapes\ObjectReference|null $ParentReference
 * @property string|null $LinkName
 */
class CreateObjectRequest extends Request
{
    /**
     * @param array{
     *     DirectoryArn: string,
     *     SchemaFacets: list<Shapes\SchemaFacet>,
     *     ObjectAttributeList?: list<Shapes\AttributeKeyAndValue>|null,
     *     ParentReference?: Shapes\ObjectReference|null,
     *     LinkName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
