<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\DeleteNetworkFirewallTransitGatewayAttachment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TransitGatewayAttachmentId
 */
class DeleteNetworkFirewallTransitGatewayAttachmentRequest extends Request
{
    /**
     * @param array{TransitGatewayAttachmentId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
