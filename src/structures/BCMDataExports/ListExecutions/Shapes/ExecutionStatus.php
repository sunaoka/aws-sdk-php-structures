<?php

namespace Sunaoka\Aws\Structures\BCMDataExports\ListExecutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $CompletedAt
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property \Aws\Api\DateTimeResult $LastUpdatedAt
 * @property 'INITIATION_IN_PROCESS'|'QUERY_QUEUED'|'QUERY_IN_PROCESS'|'QUERY_FAILURE'|'DELIVERY_IN_PROCESS'|'DELIVERY_SUCCESS'|'DELIVERY_FAILURE' $StatusCode
 * @property 'INSUFFICIENT_PERMISSION'|'BILL_OWNER_CHANGED'|'INTERNAL_FAILURE' $StatusReason
 */
class ExecutionStatus extends Shape
{
    /**
     * @param array{
     *     CompletedAt?: \Aws\Api\DateTimeResult,
     *     CreatedAt?: \Aws\Api\DateTimeResult,
     *     LastUpdatedAt?: \Aws\Api\DateTimeResult,
     *     StatusCode?: 'INITIATION_IN_PROCESS'|'QUERY_QUEUED'|'QUERY_IN_PROCESS'|'QUERY_FAILURE'|'DELIVERY_IN_PROCESS'|'DELIVERY_SUCCESS'|'DELIVERY_FAILURE',
     *     StatusReason?: 'INSUFFICIENT_PERMISSION'|'BILL_OWNER_CHANGED'|'INTERNAL_FAILURE'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
