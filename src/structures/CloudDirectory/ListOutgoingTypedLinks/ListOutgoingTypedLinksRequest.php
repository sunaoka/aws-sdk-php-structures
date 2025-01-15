<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\ListOutgoingTypedLinks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DirectoryArn
 * @property Shapes\ObjectReference $ObjectReference
 * @property list<Shapes\TypedLinkAttributeRange>|null $FilterAttributeRanges
 * @property Shapes\TypedLinkSchemaAndFacetName|null $FilterTypedLink
 * @property string|null $NextToken
 * @property int<1, max>|null $MaxResults
 * @property 'SERIALIZABLE'|'EVENTUAL'|null $ConsistencyLevel
 */
class ListOutgoingTypedLinksRequest extends Request
{
    /**
     * @param array{
     *     DirectoryArn: string,
     *     ObjectReference: Shapes\ObjectReference,
     *     FilterAttributeRanges?: list<Shapes\TypedLinkAttributeRange>|null,
     *     FilterTypedLink?: Shapes\TypedLinkSchemaAndFacetName|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, max>|null,
     *     ConsistencyLevel?: 'SERIALIZABLE'|'EVENTUAL'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
