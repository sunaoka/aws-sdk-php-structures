<?php

namespace Sunaoka\Aws\Structures\Appflow\DescribeFlowExecutionRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $executionId
 * @property 'InProgress'|'Successful'|'Error'|'CancelStarted'|'Canceled'|null $executionStatus
 * @property ExecutionResult|null $executionResult
 * @property \Aws\Api\DateTimeResult|null $startedAt
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedAt
 * @property \Aws\Api\DateTimeResult|null $dataPullStartTime
 * @property \Aws\Api\DateTimeResult|null $dataPullEndTime
 * @property list<MetadataCatalogDetail>|null $metadataCatalogDetails
 */
class ExecutionRecord extends Shape
{
    /**
     * @param array{
     *     executionId?: string|null,
     *     executionStatus?: 'InProgress'|'Successful'|'Error'|'CancelStarted'|'Canceled'|null,
     *     executionResult?: ExecutionResult|null,
     *     startedAt?: \Aws\Api\DateTimeResult|null,
     *     lastUpdatedAt?: \Aws\Api\DateTimeResult|null,
     *     dataPullStartTime?: \Aws\Api\DateTimeResult|null,
     *     dataPullEndTime?: \Aws\Api\DateTimeResult|null,
     *     metadataCatalogDetails?: list<MetadataCatalogDetail>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
