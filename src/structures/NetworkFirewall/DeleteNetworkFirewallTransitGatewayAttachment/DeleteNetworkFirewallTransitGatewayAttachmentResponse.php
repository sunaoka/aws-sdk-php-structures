<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\DeleteNetworkFirewallTransitGatewayAttachment;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $TransitGatewayAttachmentId
 * @property 'CREATING'|'DELETING'|'DELETED'|'FAILED'|'ERROR'|'READY'|'PENDING_ACCEPTANCE'|'REJECTING'|'REJECTED' $TransitGatewayAttachmentStatus
 */
class DeleteNetworkFirewallTransitGatewayAttachmentResponse extends Response
{
}
