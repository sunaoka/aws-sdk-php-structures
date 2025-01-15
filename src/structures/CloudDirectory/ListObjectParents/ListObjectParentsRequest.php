<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\ListObjectParents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DirectoryArn
 * @property Shapes\ObjectReference $ObjectReference
 * @property string|null $NextToken
 * @property int<1, max>|null $MaxResults
 * @property 'SERIALIZABLE'|'EVENTUAL'|null $ConsistencyLevel
 * @property bool|null $IncludeAllLinksToEachParent
 */
class ListObjectParentsRequest extends Request
{
    /**
     * @param array{
     *     DirectoryArn: string,
     *     ObjectReference: Shapes\ObjectReference,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, max>|null,
     *     ConsistencyLevel?: 'SERIALIZABLE'|'EVENTUAL'|null,
     *     IncludeAllLinksToEachParent?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
