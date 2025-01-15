<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\DescribeInboundCrossClusterSearchConnections\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PENDING_ACCEPTANCE'|'APPROVED'|'REJECTING'|'REJECTED'|'DELETING'|'DELETED'|null $StatusCode
 * @property string|null $Message
 */
class InboundCrossClusterSearchConnectionStatus extends Shape
{
    /**
     * @param array{
     *     StatusCode?: 'PENDING_ACCEPTANCE'|'APPROVED'|'REJECTING'|'REJECTED'|'DELETING'|'DELETED'|null,
     *     Message?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
