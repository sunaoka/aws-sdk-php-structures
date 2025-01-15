<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListMonitoringSchedules;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $EndpointName
 * @property 'Name'|'CreationTime'|'Status'|null $SortBy
 * @property 'Ascending'|'Descending'|null $SortOrder
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NameContains
 * @property \Aws\Api\DateTimeResult|null $CreationTimeBefore
 * @property \Aws\Api\DateTimeResult|null $CreationTimeAfter
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTimeBefore
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTimeAfter
 * @property 'Pending'|'Failed'|'Scheduled'|'Stopped'|null $StatusEquals
 * @property string|null $MonitoringJobDefinitionName
 * @property 'DataQuality'|'ModelQuality'|'ModelBias'|'ModelExplainability'|null $MonitoringTypeEquals
 */
class ListMonitoringSchedulesRequest extends Request
{
    /**
     * @param array{
     *     EndpointName?: string|null,
     *     SortBy?: 'Name'|'CreationTime'|'Status'|null,
     *     SortOrder?: 'Ascending'|'Descending'|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null,
     *     NameContains?: string|null,
     *     CreationTimeBefore?: \Aws\Api\DateTimeResult|null,
     *     CreationTimeAfter?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedTimeBefore?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedTimeAfter?: \Aws\Api\DateTimeResult|null,
     *     StatusEquals?: 'Pending'|'Failed'|'Scheduled'|'Stopped'|null,
     *     MonitoringJobDefinitionName?: string|null,
     *     MonitoringTypeEquals?: 'DataQuality'|'ModelQuality'|'ModelBias'|'ModelExplainability'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
