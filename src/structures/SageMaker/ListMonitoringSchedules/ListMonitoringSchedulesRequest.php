<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListMonitoringSchedules;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EndpointName
 * @property 'Name'|'CreationTime'|'Status' $SortBy
 * @property 'Ascending'|'Descending' $SortOrder
 * @property string $NextToken
 * @property int<1, 100> $MaxResults
 * @property string $NameContains
 * @property \Aws\Api\DateTimeResult $CreationTimeBefore
 * @property \Aws\Api\DateTimeResult $CreationTimeAfter
 * @property \Aws\Api\DateTimeResult $LastModifiedTimeBefore
 * @property \Aws\Api\DateTimeResult $LastModifiedTimeAfter
 * @property 'Pending'|'Failed'|'Scheduled'|'Stopped' $StatusEquals
 * @property string $MonitoringJobDefinitionName
 * @property 'DataQuality'|'ModelQuality'|'ModelBias'|'ModelExplainability' $MonitoringTypeEquals
 */
class ListMonitoringSchedulesRequest extends Request
{
    /**
     * @param array{
     *     EndpointName?: string,
     *     SortBy?: 'Name'|'CreationTime'|'Status',
     *     SortOrder?: 'Ascending'|'Descending',
     *     NextToken?: string,
     *     MaxResults?: int<1, 100>,
     *     NameContains?: string,
     *     CreationTimeBefore?: \Aws\Api\DateTimeResult,
     *     CreationTimeAfter?: \Aws\Api\DateTimeResult,
     *     LastModifiedTimeBefore?: \Aws\Api\DateTimeResult,
     *     LastModifiedTimeAfter?: \Aws\Api\DateTimeResult,
     *     StatusEquals?: 'Pending'|'Failed'|'Scheduled'|'Stopped',
     *     MonitoringJobDefinitionName?: string,
     *     MonitoringTypeEquals?: 'DataQuality'|'ModelQuality'|'ModelBias'|'ModelExplainability'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
