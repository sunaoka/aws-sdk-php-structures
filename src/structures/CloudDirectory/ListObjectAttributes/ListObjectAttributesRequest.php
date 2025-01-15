<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\ListObjectAttributes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DirectoryArn
 * @property Shapes\ObjectReference $ObjectReference
 * @property string|null $NextToken
 * @property int<1, max>|null $MaxResults
 * @property 'SERIALIZABLE'|'EVENTUAL'|null $ConsistencyLevel
 * @property Shapes\SchemaFacet|null $FacetFilter
 */
class ListObjectAttributesRequest extends Request
{
    /**
     * @param array{
     *     DirectoryArn: string,
     *     ObjectReference: Shapes\ObjectReference,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, max>|null,
     *     ConsistencyLevel?: 'SERIALIZABLE'|'EVENTUAL'|null,
     *     FacetFilter?: Shapes\SchemaFacet|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
