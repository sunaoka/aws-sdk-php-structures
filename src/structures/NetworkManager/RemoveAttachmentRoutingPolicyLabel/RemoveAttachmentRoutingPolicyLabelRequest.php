<?php

namespace Sunaoka\Aws\Structures\NetworkManager\RemoveAttachmentRoutingPolicyLabel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CoreNetworkId
 * @property string $AttachmentId
 */
class RemoveAttachmentRoutingPolicyLabelRequest extends Request
{
    /**
     * @param array{
     *     CoreNetworkId: string,
     *     AttachmentId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
