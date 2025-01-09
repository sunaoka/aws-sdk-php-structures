<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\ListOutgoingTypedLinks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DirectoryArn
 * @property Shapes\ObjectReference $ObjectReference
 * @property list<Shapes\TypedLinkAttributeRange> $FilterAttributeRanges
 * @property Shapes\TypedLinkSchemaAndFacetName $FilterTypedLink
 * @property string $NextToken
 * @property int<1, max> $MaxResults
 * @property 'SERIALIZABLE'|'EVENTUAL' $ConsistencyLevel
 */
class ListOutgoingTypedLinksRequest extends Request
{
    /**
     * @param array{
     *     DirectoryArn: string,
     *     ObjectReference: Shapes\ObjectReference,
     *     FilterAttributeRanges?: list<Shapes\TypedLinkAttributeRange>,
     *     FilterTypedLink?: Shapes\TypedLinkSchemaAndFacetName,
     *     NextToken?: string,
     *     MaxResults?: int<1, max>,
     *     ConsistencyLevel?: 'SERIALIZABLE'|'EVENTUAL'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
