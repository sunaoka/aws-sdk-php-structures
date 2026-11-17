<?php

namespace Sunaoka\Aws\Structures\NetworkFlowMonitor\GetQueryResultsPerformanceMonitor;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $monitorName
 * @property string $queryId
 * @property string|null $nextToken
 * @property int<1, 500>|null $maxResults
 */
class GetQueryResultsPerformanceMonitorRequest extends Request
{
    /**
     * @param array{
     *     monitorName: string,
     *     queryId: string,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 500>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
