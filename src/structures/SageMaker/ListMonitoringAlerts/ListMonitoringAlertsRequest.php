<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListMonitoringAlerts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MonitoringScheduleName
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class ListMonitoringAlertsRequest extends Request
{
    /**
     * @param array{
     *     MonitoringScheduleName: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
