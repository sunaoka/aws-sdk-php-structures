<?php

namespace Sunaoka\Aws\Structures\LakeFormation\ListRLSPolicyAttachments;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ResourceShape|null $Resource
 * @property Shapes\DataLakePrincipal|null $Principal
 * @property string|null $PolicyName
 * @property int<1, 1000>|null $MaxResults
 * @property string|null $NextToken
 */
class ListRLSPolicyAttachmentsRequest extends Request
{
    /**
     * @param array{
     *     Resource?: Shapes\ResourceShape|null,
     *     Principal?: Shapes\DataLakePrincipal|null,
     *     PolicyName?: string|null,
     *     MaxResults?: int<1, 1000>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
