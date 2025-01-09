<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\ListObjectParents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DirectoryArn
 * @property Shapes\ObjectReference $ObjectReference
 * @property string $NextToken
 * @property int<1, max> $MaxResults
 * @property 'SERIALIZABLE'|'EVENTUAL' $ConsistencyLevel
 * @property bool $IncludeAllLinksToEachParent
 */
class ListObjectParentsRequest extends Request
{
    /**
     * @param array{
     *     DirectoryArn: string,
     *     ObjectReference: Shapes\ObjectReference,
     *     NextToken?: string,
     *     MaxResults?: int<1, max>,
     *     ConsistencyLevel?: 'SERIALIZABLE'|'EVENTUAL',
     *     IncludeAllLinksToEachParent?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
