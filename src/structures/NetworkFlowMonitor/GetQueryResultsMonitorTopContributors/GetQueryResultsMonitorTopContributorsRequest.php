<?php

namespace Sunaoka\Aws\Structures\NetworkFlowMonitor\GetQueryResultsMonitorTopContributors;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $monitorName
 * @property string $queryId
 * @property string $nextToken
 * @property int $maxResults
 */
class GetQueryResultsMonitorTopContributorsRequest extends Request
{
    /**
     * @param array{
     *     monitorName: string,
     *     queryId: string,
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
