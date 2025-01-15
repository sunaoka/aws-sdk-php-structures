<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListMonitoringAlertHistory;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $MonitoringScheduleName
 * @property string|null $MonitoringAlertName
 * @property 'CreationTime'|'Status'|null $SortBy
 * @property 'Ascending'|'Descending'|null $SortOrder
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 * @property \Aws\Api\DateTimeResult|null $CreationTimeBefore
 * @property \Aws\Api\DateTimeResult|null $CreationTimeAfter
 * @property 'InAlert'|'OK'|null $StatusEquals
 */
class ListMonitoringAlertHistoryRequest extends Request
{
    /**
     * @param array{
     *     MonitoringScheduleName?: string|null,
     *     MonitoringAlertName?: string|null,
     *     SortBy?: 'CreationTime'|'Status'|null,
     *     SortOrder?: 'Ascending'|'Descending'|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null,
     *     CreationTimeBefore?: \Aws\Api\DateTimeResult|null,
     *     CreationTimeAfter?: \Aws\Api\DateTimeResult|null,
     *     StatusEquals?: 'InAlert'|'OK'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
