<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListIntentStageMetrics;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $botId
 * @property \Aws\Api\DateTimeResult $startDateTime
 * @property \Aws\Api\DateTimeResult $endDateTime
 * @property list<Shapes\AnalyticsIntentStageMetric> $metrics
 * @property list<Shapes\AnalyticsBinBySpecification> $binBy
 * @property list<Shapes\AnalyticsIntentStageGroupBySpecification> $groupBy
 * @property list<Shapes\AnalyticsIntentStageFilter> $filters
 * @property int $maxResults
 * @property string $nextToken
 */
class ListIntentStageMetricsRequest extends Request
{
    /**
     * @param array{
     *     botId: string,
     *     startDateTime: \Aws\Api\DateTimeResult,
     *     endDateTime: \Aws\Api\DateTimeResult,
     *     metrics: list<Shapes\AnalyticsIntentStageMetric>,
     *     binBy?: list<Shapes\AnalyticsBinBySpecification>,
     *     groupBy?: list<Shapes\AnalyticsIntentStageGroupBySpecification>,
     *     filters?: list<Shapes\AnalyticsIntentStageFilter>,
     *     maxResults?: int,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
