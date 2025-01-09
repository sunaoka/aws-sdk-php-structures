<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListMonitoringAlertHistory;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MonitoringScheduleName
 * @property string $MonitoringAlertName
 * @property 'CreationTime'|'Status' $SortBy
 * @property 'Ascending'|'Descending' $SortOrder
 * @property string $NextToken
 * @property int $MaxResults
 * @property \Aws\Api\DateTimeResult $CreationTimeBefore
 * @property \Aws\Api\DateTimeResult $CreationTimeAfter
 * @property 'InAlert'|'OK' $StatusEquals
 */
class ListMonitoringAlertHistoryRequest extends Request
{
    /**
     * @param array{
     *     MonitoringScheduleName?: string,
     *     MonitoringAlertName?: string,
     *     SortBy?: 'CreationTime'|'Status',
     *     SortOrder?: 'Ascending'|'Descending',
     *     NextToken?: string,
     *     MaxResults?: int,
     *     CreationTimeBefore?: \Aws\Api\DateTimeResult,
     *     CreationTimeAfter?: \Aws\Api\DateTimeResult,
     *     StatusEquals?: 'InAlert'|'OK'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
