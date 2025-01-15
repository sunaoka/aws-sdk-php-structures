<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\ListObjectChildren;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DirectoryArn
 * @property Shapes\ObjectReference $ObjectReference
 * @property string|null $NextToken
 * @property int<1, max>|null $MaxResults
 * @property 'SERIALIZABLE'|'EVENTUAL'|null $ConsistencyLevel
 */
class ListObjectChildrenRequest extends Request
{
    /**
     * @param array{
     *     DirectoryArn: string,
     *     ObjectReference: Shapes\ObjectReference,
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
