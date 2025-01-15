<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListUtteranceMetrics;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $botId
 * @property \Aws\Api\DateTimeResult $startDateTime
 * @property \Aws\Api\DateTimeResult $endDateTime
 * @property list<Shapes\AnalyticsUtteranceMetric> $metrics
 * @property list<Shapes\AnalyticsBinBySpecification>|null $binBy
 * @property list<Shapes\AnalyticsUtteranceGroupBySpecification>|null $groupBy
 * @property list<Shapes\AnalyticsUtteranceAttribute>|null $attributes
 * @property list<Shapes\AnalyticsUtteranceFilter>|null $filters
 * @property int<1, 1000>|null $maxResults
 * @property string|null $nextToken
 */
class ListUtteranceMetricsRequest extends Request
{
    /**
     * @param array{
     *     botId: string,
     *     startDateTime: \Aws\Api\DateTimeResult,
     *     endDateTime: \Aws\Api\DateTimeResult,
     *     metrics: list<Shapes\AnalyticsUtteranceMetric>,
     *     binBy?: list<Shapes\AnalyticsBinBySpecification>|null,
     *     groupBy?: list<Shapes\AnalyticsUtteranceGroupBySpecification>|null,
     *     attributes?: list<Shapes\AnalyticsUtteranceAttribute>|null,
     *     filters?: list<Shapes\AnalyticsUtteranceFilter>|null,
     *     maxResults?: int<1, 1000>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
