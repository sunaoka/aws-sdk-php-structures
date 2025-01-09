<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\AcceptInboundConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PENDING_ACCEPTANCE'|'APPROVED'|'PROVISIONING'|'ACTIVE'|'REJECTING'|'REJECTED'|'DELETING'|'DELETED' $StatusCode
 * @property string $Message
 */
class InboundConnectionStatus extends Shape
{
    /**
     * @param array{
     *     StatusCode?: 'PENDING_ACCEPTANCE'|'APPROVED'|'PROVISIONING'|'ACTIVE'|'REJECTING'|'REJECTED'|'DELETING'|'DELETED',
     *     Message?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
