<?php

namespace Sunaoka\Aws\Structures\NetworkManager\PutAttachmentRoutingPolicyLabel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CoreNetworkId
 * @property string $AttachmentId
 * @property string $RoutingPolicyLabel
 * @property string|null $ClientToken
 */
class PutAttachmentRoutingPolicyLabelRequest extends Request
{
    /**
     * @param array{
     *     CoreNetworkId: string,
     *     AttachmentId: string,
     *     RoutingPolicyLabel: string,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
