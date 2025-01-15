<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListIntentMetrics;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $botId
 * @property \Aws\Api\DateTimeResult $startDateTime
 * @property \Aws\Api\DateTimeResult $endDateTime
 * @property list<Shapes\AnalyticsIntentMetric> $metrics
 * @property list<Shapes\AnalyticsBinBySpecification>|null $binBy
 * @property list<Shapes\AnalyticsIntentGroupBySpecification>|null $groupBy
 * @property list<Shapes\AnalyticsIntentFilter>|null $filters
 * @property int<1, 1000>|null $maxResults
 * @property string|null $nextToken
 */
class ListIntentMetricsRequest extends Request
{
    /**
     * @param array{
     *     botId: string,
     *     startDateTime: \Aws\Api\DateTimeResult,
     *     endDateTime: \Aws\Api\DateTimeResult,
     *     metrics: list<Shapes\AnalyticsIntentMetric>,
     *     binBy?: list<Shapes\AnalyticsBinBySpecification>|null,
     *     groupBy?: list<Shapes\AnalyticsIntentGroupBySpecification>|null,
     *     filters?: list<Shapes\AnalyticsIntentFilter>|null,
     *     maxResults?: int<1, 1000>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
