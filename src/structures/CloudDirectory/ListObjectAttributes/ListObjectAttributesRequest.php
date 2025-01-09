<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\ListObjectAttributes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DirectoryArn
 * @property Shapes\ObjectReference $ObjectReference
 * @property string $NextToken
 * @property int $MaxResults
 * @property 'SERIALIZABLE'|'EVENTUAL' $ConsistencyLevel
 * @property Shapes\SchemaFacet $FacetFilter
 */
class ListObjectAttributesRequest extends Request
{
    /**
     * @param array{
     *     DirectoryArn: string,
     *     ObjectReference: Shapes\ObjectReference,
     *     NextToken?: string,
     *     MaxResults?: int,
     *     ConsistencyLevel?: 'SERIALIZABLE'|'EVENTUAL',
     *     FacetFilter?: Shapes\SchemaFacet
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
