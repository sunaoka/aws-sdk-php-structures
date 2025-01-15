<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListMonitoringExecutions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $MonitoringScheduleName
 * @property string|null $EndpointName
 * @property 'CreationTime'|'ScheduledTime'|'Status'|null $SortBy
 * @property 'Ascending'|'Descending'|null $SortOrder
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 * @property \Aws\Api\DateTimeResult|null $ScheduledTimeBefore
 * @property \Aws\Api\DateTimeResult|null $ScheduledTimeAfter
 * @property \Aws\Api\DateTimeResult|null $CreationTimeBefore
 * @property \Aws\Api\DateTimeResult|null $CreationTimeAfter
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTimeBefore
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTimeAfter
 * @property 'Pending'|'Completed'|'CompletedWithViolations'|'InProgress'|'Failed'|'Stopping'|'Stopped'|null $StatusEquals
 * @property string|null $MonitoringJobDefinitionName
 * @property 'DataQuality'|'ModelQuality'|'ModelBias'|'ModelExplainability'|null $MonitoringTypeEquals
 */
class ListMonitoringExecutionsRequest extends Request
{
    /**
     * @param array{
     *     MonitoringScheduleName?: string|null,
     *     EndpointName?: string|null,
     *     SortBy?: 'CreationTime'|'ScheduledTime'|'Status'|null,
     *     SortOrder?: 'Ascending'|'Descending'|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null,
     *     ScheduledTimeBefore?: \Aws\Api\DateTimeResult|null,
     *     ScheduledTimeAfter?: \Aws\Api\DateTimeResult|null,
     *     CreationTimeBefore?: \Aws\Api\DateTimeResult|null,
     *     CreationTimeAfter?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedTimeBefore?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedTimeAfter?: \Aws\Api\DateTimeResult|null,
     *     StatusEquals?: 'Pending'|'Completed'|'CompletedWithViolations'|'InProgress'|'Failed'|'Stopping'|'Stopped'|null,
     *     MonitoringJobDefinitionName?: string|null,
     *     MonitoringTypeEquals?: 'DataQuality'|'ModelQuality'|'ModelBias'|'ModelExplainability'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
