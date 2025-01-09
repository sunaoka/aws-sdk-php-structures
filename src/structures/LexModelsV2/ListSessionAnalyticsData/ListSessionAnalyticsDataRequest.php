<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListSessionAnalyticsData;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $botId
 * @property \Aws\Api\DateTimeResult $startDateTime
 * @property \Aws\Api\DateTimeResult $endDateTime
 * @property Shapes\SessionDataSortBy $sortBy
 * @property list<Shapes\AnalyticsSessionFilter> $filters
 * @property int $maxResults
 * @property string $nextToken
 */
class ListSessionAnalyticsDataRequest extends Request
{
    /**
     * @param array{
     *     botId: string,
     *     startDateTime: \Aws\Api\DateTimeResult,
     *     endDateTime: \Aws\Api\DateTimeResult,
     *     sortBy?: Shapes\SessionDataSortBy,
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
