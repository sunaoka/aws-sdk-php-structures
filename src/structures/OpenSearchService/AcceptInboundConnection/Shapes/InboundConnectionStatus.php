<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\AcceptInboundConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PENDING_ACCEPTANCE'|'APPROVED'|'PROVISIONING'|'ACTIVE'|'REJECTING'|'REJECTED'|'DELETING'|'DELETED'|null $StatusCode
 * @property string|null $Message
 */
class InboundConnectionStatus extends Shape
{
    /**
     * @param array{
     *     StatusCode?: 'PENDING_ACCEPTANCE'|'APPROVED'|'PROVISIONING'|'ACTIVE'|'REJECTING'|'REJECTED'|'DELETING'|'DELETED'|null,
     *     Message?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
