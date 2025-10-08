<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\AcceptNetworkFirewallTransitGatewayAttachment;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $TransitGatewayAttachmentId
 * @property 'CREATING'|'DELETING'|'DELETED'|'FAILED'|'ERROR'|'READY'|'PENDING_ACCEPTANCE'|'REJECTING'|'REJECTED' $TransitGatewayAttachmentStatus
 */
class AcceptNetworkFirewallTransitGatewayAttachmentResponse extends Response
{
}
