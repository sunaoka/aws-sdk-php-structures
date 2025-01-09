<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\ListObjectPolicies;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DirectoryArn
 * @property Shapes\ObjectReference $ObjectReference
 * @property string $NextToken
 * @property int $MaxResults
 * @property 'SERIALIZABLE'|'EVENTUAL' $ConsistencyLevel
 */
class ListObjectPoliciesRequest extends Request
{
    /**
     * @param array{
     *     DirectoryArn: string,
     *     ObjectReference: Shapes\ObjectReference,
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
