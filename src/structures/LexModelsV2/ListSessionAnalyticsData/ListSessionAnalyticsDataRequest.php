<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListSessionAnalyticsData;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $botId
 * @property \Aws\Api\DateTimeResult $startDateTime
 * @property \Aws\Api\DateTimeResult $endDateTime
 * @property Shapes\SessionDataSortBy|null $sortBy
 * @property list<Shapes\AnalyticsSessionFilter>|null $filters
 * @property int<1, 1000>|null $maxResults
 * @property string|null $nextToken
 */
class ListSessionAnalyticsDataRequest extends Request
{
    /**
     * @param array{
     *     botId: string,
     *     startDateTime: \Aws\Api\DateTimeResult,
     *     endDateTime: \Aws\Api\DateTimeResult,
     *     sortBy?: Shapes\SessionDataSortBy|null,
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
