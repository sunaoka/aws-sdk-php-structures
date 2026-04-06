<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\DescribeFirewall\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AttachmentId
 * @property 'CREATING'|'DELETING'|'DELETED'|'FAILED'|'ERROR'|'READY'|'PENDING_ACCEPTANCE'|'REJECTING'|'REJECTED'|null $TransitGatewayAttachmentStatus
 * @property string|null $StatusMessage
 */
class TransitGatewayAttachmentSyncState extends Shape
{
    /**
     * @param array{
     *     AttachmentId?: string|null,
     *     TransitGatewayAttachmentStatus?: 'CREATING'|'DELETING'|'DELETED'|'FAILED'|'ERROR'|'READY'|'PENDING_ACCEPTANCE'|'REJECTING'|'REJECTED'|null,
     *     StatusMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
