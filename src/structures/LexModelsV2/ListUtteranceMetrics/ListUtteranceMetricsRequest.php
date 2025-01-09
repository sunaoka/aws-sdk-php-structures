<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListUtteranceMetrics;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $botId
 * @property \Aws\Api\DateTimeResult $startDateTime
 * @property \Aws\Api\DateTimeResult $endDateTime
 * @property list<Shapes\AnalyticsUtteranceMetric> $metrics
 * @property list<Shapes\AnalyticsBinBySpecification> $binBy
 * @property list<Shapes\AnalyticsUtteranceGroupBySpecification> $groupBy
 * @property list<Shapes\AnalyticsUtteranceAttribute> $attributes
 * @property list<Shapes\AnalyticsUtteranceFilter> $filters
 * @property int $maxResults
 * @property string $nextToken
 */
class ListUtteranceMetricsRequest extends Request
{
    /**
     * @param array{
     *     botId: string,
     *     startDateTime: \Aws\Api\DateTimeResult,
     *     endDateTime: \Aws\Api\DateTimeResult,
     *     metrics: list<Shapes\AnalyticsUtteranceMetric>,
     *     binBy?: list<Shapes\AnalyticsBinBySpecification>,
     *     groupBy?: list<Shapes\AnalyticsUtteranceGroupBySpecification>,
     *     attributes?: list<Shapes\AnalyticsUtteranceAttribute>,
     *     filters?: list<Shapes\AnalyticsUtteranceFilter>,
     *     maxResults?: int,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
