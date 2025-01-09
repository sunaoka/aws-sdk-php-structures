<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\AttachTypedLink;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DirectoryArn
 * @property Shapes\ObjectReference $SourceObjectReference
 * @property Shapes\ObjectReference $TargetObjectReference
 * @property Shapes\TypedLinkSchemaAndFacetName $TypedLinkFacet
 * @property list<Shapes\AttributeNameAndValue> $Attributes
 */
class AttachTypedLinkRequest extends Request
{
    /**
     * @param array{
     *     DirectoryArn: string,
     *     SourceObjectReference: Shapes\ObjectReference,
     *     TargetObjectReference: Shapes\ObjectReference,
     *     TypedLinkFacet: Shapes\TypedLinkSchemaAndFacetName,
     *     Attributes: list<Shapes\AttributeNameAndValue>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
