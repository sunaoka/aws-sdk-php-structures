<?php

namespace Sunaoka\Aws\Structures\InternetMonitor\StartQuery;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MonitorName
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property 'MEASUREMENTS'|'TOP_LOCATIONS'|'TOP_LOCATION_DETAILS'|'OVERALL_TRAFFIC_SUGGESTIONS'|'OVERALL_TRAFFIC_SUGGESTIONS_DETAILS'|'ROUTING_SUGGESTIONS' $QueryType
 * @property list<Shapes\FilterParameter> $FilterParameters
 * @property string $LinkedAccountId
 */
class StartQueryRequest extends Request
{
    /**
     * @param array{
     *     MonitorName: string,
     *     StartTime: \Aws\Api\DateTimeResult,
     *     EndTime: \Aws\Api\DateTimeResult,
     *     QueryType: 'MEASUREMENTS'|'TOP_LOCATIONS'|'TOP_LOCATION_DETAILS'|'OVERALL_TRAFFIC_SUGGESTIONS'|'OVERALL_TRAFFIC_SUGGESTIONS_DETAILS'|'ROUTING_SUGGESTIONS',
     *     FilterParameters?: list<Shapes\FilterParameter>,
     *     LinkedAccountId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
