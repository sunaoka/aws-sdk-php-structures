<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\AcceptInboundCrossClusterSearchConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PENDING_ACCEPTANCE'|'APPROVED'|'REJECTING'|'REJECTED'|'DELETING'|'DELETED' $StatusCode
 * @property string $Message
 */
class InboundCrossClusterSearchConnectionStatus extends Shape
{
    /**
     * @param array{
     *     StatusCode?: 'PENDING_ACCEPTANCE'|'APPROVED'|'REJECTING'|'REJECTED'|'DELETING'|'DELETED',
     *     Message?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
