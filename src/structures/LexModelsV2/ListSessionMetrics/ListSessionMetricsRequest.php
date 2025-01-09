<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListSessionMetrics;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $botId
 * @property \Aws\Api\DateTimeResult $startDateTime
 * @property \Aws\Api\DateTimeResult $endDateTime
 * @property list<Shapes\AnalyticsSessionMetric> $metrics
 * @property list<Shapes\AnalyticsBinBySpecification> $binBy
 * @property list<Shapes\AnalyticsSessionGroupBySpecification> $groupBy
 * @property list<Shapes\AnalyticsSessionFilter> $filters
 * @property int $maxResults
 * @property string $nextToken
 */
class ListSessionMetricsRequest extends Request
{
    /**
     * @param array{
     *     botId: string,
     *     startDateTime: \Aws\Api\DateTimeResult,
     *     endDateTime: \Aws\Api\DateTimeResult,
     *     metrics: list<Shapes\AnalyticsSessionMetric>,
     *     binBy?: list<Shapes\AnalyticsBinBySpecification>,
     *     groupBy?: list<Shapes\AnalyticsSessionGroupBySpecification>,
     *     filters?: list<Shapes\AnalyticsSessionFilter>,
     *     maxResults?: int,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
