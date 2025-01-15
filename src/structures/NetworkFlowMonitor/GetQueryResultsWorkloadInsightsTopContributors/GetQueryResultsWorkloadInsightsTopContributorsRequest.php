<?php

namespace Sunaoka\Aws\Structures\NetworkFlowMonitor\GetQueryResultsWorkloadInsightsTopContributors;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $scopeId
 * @property string $queryId
 * @property string|null $nextToken
 * @property int|null $maxResults
 */
class GetQueryResultsWorkloadInsightsTopContributorsRequest extends Request
{
    /**
     * @param array{
     *     scopeId: string,
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
