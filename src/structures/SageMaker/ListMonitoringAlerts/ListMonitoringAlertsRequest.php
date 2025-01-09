<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListMonitoringAlerts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MonitoringScheduleName
 * @property string $NextToken
 * @property int $MaxResults
 */
class ListMonitoringAlertsRequest extends Request
{
    /**
     * @param array{
     *     MonitoringScheduleName: string,
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
