<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\ListFlowOperations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $FlowOperationId
 * @property 'FLOW_FLUSH'|'FLOW_CAPTURE'|null $FlowOperationType
 * @property \Aws\Api\DateTimeResult|null $FlowRequestTimestamp
 * @property 'COMPLETED'|'IN_PROGRESS'|'FAILED'|'COMPLETED_WITH_ERRORS'|null $FlowOperationStatus
 */
class FlowOperationMetadata extends Shape
{
    /**
     * @param array{
     *     FlowOperationId?: string|null,
     *     FlowOperationType?: 'FLOW_FLUSH'|'FLOW_CAPTURE'|null,
     *     FlowRequestTimestamp?: \Aws\Api\DateTimeResult|null,
     *     FlowOperationStatus?: 'COMPLETED'|'IN_PROGRESS'|'FAILED'|'COMPLETED_WITH_ERRORS'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
