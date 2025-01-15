<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\BatchRead\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ObjectReference $ObjectReference
 * @property list<TypedLinkAttributeRange>|null $FilterAttributeRanges
 * @property TypedLinkSchemaAndFacetName|null $FilterTypedLink
 * @property string|null $NextToken
 * @property int<1, max>|null $MaxResults
 */
class BatchListIncomingTypedLinks extends Shape
{
    /**
     * @param array{
     *     ObjectReference: ObjectReference,
     *     FilterAttributeRanges?: list<TypedLinkAttributeRange>|null,
     *     FilterTypedLink?: TypedLinkSchemaAndFacetName|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, max>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
