<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\DeleteOutboundCrossClusterSearchConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PENDING_ACCEPTANCE'|'VALIDATING'|'VALIDATION_FAILED'|'PROVISIONING'|'ACTIVE'|'REJECTED'|'DELETING'|'DELETED'|null $StatusCode
 * @property string|null $Message
 */
class OutboundCrossClusterSearchConnectionStatus extends Shape
{
    /**
     * @param array{
     *     StatusCode?: 'PENDING_ACCEPTANCE'|'VALIDATING'|'VALIDATION_FAILED'|'PROVISIONING'|'ACTIVE'|'REJECTED'|'DELETING'|'DELETED'|null,
     *     Message?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
