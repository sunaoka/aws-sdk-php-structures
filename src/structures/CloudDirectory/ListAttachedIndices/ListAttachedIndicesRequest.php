<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\ListAttachedIndices;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DirectoryArn
 * @property Shapes\ObjectReference $TargetReference
 * @property string $NextToken
 * @property int $MaxResults
 * @property 'SERIALIZABLE'|'EVENTUAL' $ConsistencyLevel
 */
class ListAttachedIndicesRequest extends Request
{
    /**
     * @param array{
     *     DirectoryArn: string,
     *     TargetReference: Shapes\ObjectReference,
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
