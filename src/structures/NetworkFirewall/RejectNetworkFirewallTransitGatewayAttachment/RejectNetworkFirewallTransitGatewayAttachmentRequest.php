<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\RejectNetworkFirewallTransitGatewayAttachment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TransitGatewayAttachmentId
 */
class RejectNetworkFirewallTransitGatewayAttachmentRequest extends Request
{
    /**
     * @param array{TransitGatewayAttachmentId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
