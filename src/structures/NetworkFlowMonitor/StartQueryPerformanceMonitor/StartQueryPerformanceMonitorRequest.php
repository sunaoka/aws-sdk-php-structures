<?php

namespace Sunaoka\Aws\Structures\NetworkFlowMonitor\StartQueryPerformanceMonitor;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $monitorName
 * @property \Aws\Api\DateTimeResult $startTime
 * @property \Aws\Api\DateTimeResult $endTime
 * @property 'TOP_PATHS' $queryType
 * @property list<Shapes\FilterParameter>|null $filterParameters
 * @property int<1, 500>|null $limit
 */
class StartQueryPerformanceMonitorRequest extends Request
{
    /**
     * @param array{
     *     monitorName: string,
     *     startTime: \Aws\Api\DateTimeResult,
     *     endTime: \Aws\Api\DateTimeResult,
     *     queryType: 'TOP_PATHS',
     *     filterParameters?: list<Shapes\FilterParameter>|null,
     *     limit?: int<1, 500>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
