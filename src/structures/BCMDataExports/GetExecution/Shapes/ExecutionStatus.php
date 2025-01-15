<?php

namespace Sunaoka\Aws\Structures\BCMDataExports\GetExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $CompletedAt
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedAt
 * @property 'INITIATION_IN_PROCESS'|'QUERY_QUEUED'|'QUERY_IN_PROCESS'|'QUERY_FAILURE'|'DELIVERY_IN_PROCESS'|'DELIVERY_SUCCESS'|'DELIVERY_FAILURE'|null $StatusCode
 * @property 'INSUFFICIENT_PERMISSION'|'BILL_OWNER_CHANGED'|'INTERNAL_FAILURE'|null $StatusReason
 */
class ExecutionStatus extends Shape
{
    /**
     * @param array{
     *     CompletedAt?: \Aws\Api\DateTimeResult|null,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     LastUpdatedAt?: \Aws\Api\DateTimeResult|null,
     *     StatusCode?: 'INITIATION_IN_PROCESS'|'QUERY_QUEUED'|'QUERY_IN_PROCESS'|'QUERY_FAILURE'|'DELIVERY_IN_PROCESS'|'DELIVERY_SUCCESS'|'DELIVERY_FAILURE'|null,
     *     StatusReason?: 'INSUFFICIENT_PERMISSION'|'BILL_OWNER_CHANGED'|'INTERNAL_FAILURE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
