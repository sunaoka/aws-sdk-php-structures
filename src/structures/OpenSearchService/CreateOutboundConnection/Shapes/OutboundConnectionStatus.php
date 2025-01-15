<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\CreateOutboundConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'VALIDATING'|'VALIDATION_FAILED'|'PENDING_ACCEPTANCE'|'APPROVED'|'PROVISIONING'|'ACTIVE'|'REJECTING'|'REJECTED'|'DELETING'|'DELETED'|null $StatusCode
 * @property string|null $Message
 */
class OutboundConnectionStatus extends Shape
{
    /**
     * @param array{
     *     StatusCode?: 'VALIDATING'|'VALIDATION_FAILED'|'PENDING_ACCEPTANCE'|'APPROVED'|'PROVISIONING'|'ACTIVE'|'REJECTING'|'REJECTED'|'DELETING'|'DELETED'|null,
     *     Message?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
