<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\BatchRead\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ObjectReference $ObjectReference
 * @property list<TypedLinkAttributeRange> $FilterAttributeRanges
 * @property TypedLinkSchemaAndFacetName $FilterTypedLink
 * @property string $NextToken
 * @property int<1, max> $MaxResults
 */
class BatchListIncomingTypedLinks extends Shape
{
    /**
     * @param array{
     *     ObjectReference: ObjectReference,
     *     FilterAttributeRanges?: list<TypedLinkAttributeRange>,
     *     FilterTypedLink?: TypedLinkSchemaAndFacetName,
     *     NextToken?: string,
     *     MaxResults?: int<1, max>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
