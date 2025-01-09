<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\DescribeOutboundCrossClusterSearchConnections\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PENDING_ACCEPTANCE'|'VALIDATING'|'VALIDATION_FAILED'|'PROVISIONING'|'ACTIVE'|'REJECTED'|'DELETING'|'DELETED' $StatusCode
 * @property string $Message
 */
class OutboundCrossClusterSearchConnectionStatus extends Shape
{
    /**
     * @param array{
     *     StatusCode?: 'PENDING_ACCEPTANCE'|'VALIDATING'|'VALIDATION_FAILED'|'PROVISIONING'|'ACTIVE'|'REJECTED'|'DELETING'|'DELETED',
     *     Message?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
