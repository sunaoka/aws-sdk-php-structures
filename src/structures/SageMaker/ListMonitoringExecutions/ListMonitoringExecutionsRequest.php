<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListMonitoringExecutions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MonitoringScheduleName
 * @property string $EndpointName
 * @property 'CreationTime'|'ScheduledTime'|'Status' $SortBy
 * @property 'Ascending'|'Descending' $SortOrder
 * @property string $NextToken
 * @property int $MaxResults
 * @property \Aws\Api\DateTimeResult $ScheduledTimeBefore
 * @property \Aws\Api\DateTimeResult $ScheduledTimeAfter
 * @property \Aws\Api\DateTimeResult $CreationTimeBefore
 * @property \Aws\Api\DateTimeResult $CreationTimeAfter
 * @property \Aws\Api\DateTimeResult $LastModifiedTimeBefore
 * @property \Aws\Api\DateTimeResult $LastModifiedTimeAfter
 * @property 'Pending'|'Completed'|'CompletedWithViolations'|'InProgress'|'Failed'|'Stopping'|'Stopped' $StatusEquals
 * @property string $MonitoringJobDefinitionName
 * @property 'DataQuality'|'ModelQuality'|'ModelBias'|'ModelExplainability' $MonitoringTypeEquals
 */
class ListMonitoringExecutionsRequest extends Request
{
    /**
     * @param array{
     *     MonitoringScheduleName?: string,
     *     EndpointName?: string,
     *     SortBy?: 'CreationTime'|'ScheduledTime'|'Status',
     *     SortOrder?: 'Ascending'|'Descending',
     *     NextToken?: string,
     *     MaxResults?: int,
     *     ScheduledTimeBefore?: \Aws\Api\DateTimeResult,
     *     ScheduledTimeAfter?: \Aws\Api\DateTimeResult,
     *     CreationTimeBefore?: \Aws\Api\DateTimeResult,
     *     CreationTimeAfter?: \Aws\Api\DateTimeResult,
     *     LastModifiedTimeBefore?: \Aws\Api\DateTimeResult,
     *     LastModifiedTimeAfter?: \Aws\Api\DateTimeResult,
     *     StatusEquals?: 'Pending'|'Completed'|'CompletedWithViolations'|'InProgress'|'Failed'|'Stopping'|'Stopped',
     *     MonitoringJobDefinitionName?: string,
     *     MonitoringTypeEquals?: 'DataQuality'|'ModelQuality'|'ModelBias'|'ModelExplainability'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
