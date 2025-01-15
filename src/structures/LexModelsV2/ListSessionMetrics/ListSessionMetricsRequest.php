<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListSessionMetrics;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $botId
 * @property \Aws\Api\DateTimeResult $startDateTime
 * @property \Aws\Api\DateTimeResult $endDateTime
 * @property list<Shapes\AnalyticsSessionMetric> $metrics
 * @property list<Shapes\AnalyticsBinBySpecification>|null $binBy
 * @property list<Shapes\AnalyticsSessionGroupBySpecification>|null $groupBy
 * @property list<Shapes\AnalyticsSessionFilter>|null $filters
 * @property int<1, 1000>|null $maxResults
 * @property string|null $nextToken
 */
class ListSessionMetricsRequest extends Request
{
    /**
     * @param array{
     *     botId: string,
     *     startDateTime: \Aws\Api\DateTimeResult,
     *     endDateTime: \Aws\Api\DateTimeResult,
     *     metrics: list<Shapes\AnalyticsSessionMetric>,
     *     binBy?: list<Shapes\AnalyticsBinBySpecification>|null,
     *     groupBy?: list<Shapes\AnalyticsSessionGroupBySpecification>|null,
     *     filters?: list<Shapes\AnalyticsSessionFilter>|null,
     *     maxResults?: int<1, 1000>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
