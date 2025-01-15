<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListIntentStageMetrics;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $botId
 * @property \Aws\Api\DateTimeResult $startDateTime
 * @property \Aws\Api\DateTimeResult $endDateTime
 * @property list<Shapes\AnalyticsIntentStageMetric> $metrics
 * @property list<Shapes\AnalyticsBinBySpecification>|null $binBy
 * @property list<Shapes\AnalyticsIntentStageGroupBySpecification>|null $groupBy
 * @property list<Shapes\AnalyticsIntentStageFilter>|null $filters
 * @property int<1, 1000>|null $maxResults
 * @property string|null $nextToken
 */
class ListIntentStageMetricsRequest extends Request
{
    /**
     * @param array{
     *     botId: string,
     *     startDateTime: \Aws\Api\DateTimeResult,
     *     endDateTime: \Aws\Api\DateTimeResult,
     *     metrics: list<Shapes\AnalyticsIntentStageMetric>,
     *     binBy?: list<Shapes\AnalyticsBinBySpecification>|null,
     *     groupBy?: list<Shapes\AnalyticsIntentStageGroupBySpecification>|null,
     *     filters?: list<Shapes\AnalyticsIntentStageFilter>|null,
     *     maxResults?: int<1, 1000>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
