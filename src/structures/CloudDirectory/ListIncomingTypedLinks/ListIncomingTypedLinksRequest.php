<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\ListIncomingTypedLinks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DirectoryArn
 * @property Shapes\ObjectReference $ObjectReference
 * @property list<Shapes\TypedLinkAttributeRange> $FilterAttributeRanges
 * @property Shapes\TypedLinkSchemaAndFacetName $FilterTypedLink
 * @property string $NextToken
 * @property int $MaxResults
 * @property 'SERIALIZABLE'|'EVENTUAL' $ConsistencyLevel
 */
class ListIncomingTypedLinksRequest extends Request
{
    /**
     * @param array{
     *     DirectoryArn: string,
     *     ObjectReference: Shapes\ObjectReference,
     *     FilterAttributeRanges?: list<Shapes\TypedLinkAttributeRange>,
     *     FilterTypedLink?: Shapes\TypedLinkSchemaAndFacetName,
     *     NextToken?: string,
     *     MaxResults?: int,
     *     ConsistencyLevel?: 'SERIALIZABLE'|'EVENTUAL'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
