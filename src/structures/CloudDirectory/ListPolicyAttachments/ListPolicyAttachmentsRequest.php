<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\ListPolicyAttachments;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DirectoryArn
 * @property Shapes\ObjectReference $PolicyReference
 * @property string $NextToken
 * @property int<1, max> $MaxResults
 * @property 'SERIALIZABLE'|'EVENTUAL' $ConsistencyLevel
 */
class ListPolicyAttachmentsRequest extends Request
{
    /**
     * @param array{
     *     DirectoryArn: string,
     *     PolicyReference: Shapes\ObjectReference,
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
