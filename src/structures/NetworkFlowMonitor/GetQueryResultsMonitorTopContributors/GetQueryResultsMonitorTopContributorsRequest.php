<?php

namespace Sunaoka\Aws\Structures\NetworkFlowMonitor\GetQueryResultsMonitorTopContributors;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $monitorName
 * @property string $queryId
 * @property string|null $nextToken
 * @property int|null $maxResults
 */
class GetQueryResultsMonitorTopContributorsRequest extends Request
{
    /**
     * @param array{
     *     monitorName: string,
     *     queryId: string,
     *     nextToken?: string|null,
     *     maxResults?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
