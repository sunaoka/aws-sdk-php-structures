<?php

namespace Sunaoka\Aws\Structures\NetworkFlowMonitor\GetQueryResultsWorkloadInsightsTopContributors;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $scopeId
 * @property string $queryId
 * @property string $nextToken
 * @property int $maxResults
 */
class GetQueryResultsWorkloadInsightsTopContributorsRequest extends Request
{
    /**
     * @param array{
     *     scopeId: string,
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
