<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\ListPolicyAttachments;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DirectoryArn
 * @property Shapes\ObjectReference $PolicyReference
 * @property string|null $NextToken
 * @property int<1, max>|null $MaxResults
 * @property 'SERIALIZABLE'|'EVENTUAL'|null $ConsistencyLevel
 */
class ListPolicyAttachmentsRequest extends Request
{
    /**
     * @param array{
     *     DirectoryArn: string,
     *     PolicyReference: Shapes\ObjectReference,
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
