<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\AcceptNetworkFirewallTransitGatewayAttachment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TransitGatewayAttachmentId
 */
class AcceptNetworkFirewallTransitGatewayAttachmentRequest extends Request
{
    /**
     * @param array{TransitGatewayAttachmentId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
