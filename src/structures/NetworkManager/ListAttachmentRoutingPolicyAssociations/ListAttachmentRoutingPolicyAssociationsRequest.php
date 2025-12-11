<?php

namespace Sunaoka\Aws\Structures\NetworkManager\ListAttachmentRoutingPolicyAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CoreNetworkId
 * @property string|null $AttachmentId
 * @property int<1, 500>|null $MaxResults
 * @property string|null $NextToken
 */
class ListAttachmentRoutingPolicyAssociationsRequest extends Request
{
    /**
     * @param array{
     *     CoreNetworkId: string,
     *     AttachmentId?: string|null,
     *     MaxResults?: int<1, 500>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
