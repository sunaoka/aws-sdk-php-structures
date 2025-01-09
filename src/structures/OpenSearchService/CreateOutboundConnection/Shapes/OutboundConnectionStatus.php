<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\CreateOutboundConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'VALIDATING'|'VALIDATION_FAILED'|'PENDING_ACCEPTANCE'|'APPROVED'|'PROVISIONING'|'ACTIVE'|'REJECTING'|'REJECTED'|'DELETING'|'DELETED' $StatusCode
 * @property string $Message
 */
class OutboundConnectionStatus extends Shape
{
    /**
     * @param array{
     *     StatusCode?: 'VALIDATING'|'VALIDATION_FAILED'|'PENDING_ACCEPTANCE'|'APPROVED'|'PROVISIONING'|'ACTIVE'|'REJECTING'|'REJECTED'|'DELETING'|'DELETED',
     *     Message?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
