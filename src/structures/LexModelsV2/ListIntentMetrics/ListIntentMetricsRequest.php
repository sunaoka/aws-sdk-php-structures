<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListIntentMetrics;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $botId
 * @property \Aws\Api\DateTimeResult $startDateTime
 * @property \Aws\Api\DateTimeResult $endDateTime
 * @property list<Shapes\AnalyticsIntentMetric> $metrics
 * @property list<Shapes\AnalyticsBinBySpecification> $binBy
 * @property list<Shapes\AnalyticsIntentGroupBySpecification> $groupBy
 * @property list<Shapes\AnalyticsIntentFilter> $filters
 * @property int $maxResults
 * @property string $nextToken
 */
class ListIntentMetricsRequest extends Request
{
    /**
     * @param array{
     *     botId: string,
     *     startDateTime: \Aws\Api\DateTimeResult,
     *     endDateTime: \Aws\Api\DateTimeResult,
     *     metrics: list<Shapes\AnalyticsIntentMetric>,
     *     binBy?: list<Shapes\AnalyticsBinBySpecification>,
     *     groupBy?: list<Shapes\AnalyticsIntentGroupBySpecification>,
     *     filters?: list<Shapes\AnalyticsIntentFilter>,
     *     maxResults?: int,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
