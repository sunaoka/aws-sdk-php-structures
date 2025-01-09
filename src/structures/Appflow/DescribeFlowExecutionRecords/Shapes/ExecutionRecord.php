<?php

namespace Sunaoka\Aws\Structures\Appflow\DescribeFlowExecutionRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $executionId
 * @property 'InProgress'|'Successful'|'Error'|'CancelStarted'|'Canceled' $executionStatus
 * @property ExecutionResult $executionResult
 * @property \Aws\Api\DateTimeResult $startedAt
 * @property \Aws\Api\DateTimeResult $lastUpdatedAt
 * @property \Aws\Api\DateTimeResult $dataPullStartTime
 * @property \Aws\Api\DateTimeResult $dataPullEndTime
 * @property list<MetadataCatalogDetail> $metadataCatalogDetails
 */
class ExecutionRecord extends Shape
{
    /**
     * @param array{
     *     executionId?: string,
     *     executionStatus?: 'InProgress'|'Successful'|'Error'|'CancelStarted'|'Canceled',
     *     executionResult?: ExecutionResult,
     *     startedAt?: \Aws\Api\DateTimeResult,
     *     lastUpdatedAt?: \Aws\Api\DateTimeResult,
     *     dataPullStartTime?: \Aws\Api\DateTimeResult,
     *     dataPullEndTime?: \Aws\Api\DateTimeResult,
     *     metadataCatalogDetails?: list<MetadataCatalogDetail>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
