<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListUtteranceAnalyticsData;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $botId
 * @property \Aws\Api\DateTimeResult $startDateTime
 * @property \Aws\Api\DateTimeResult $endDateTime
 * @property Shapes\UtteranceDataSortBy $sortBy
 * @property list<Shapes\AnalyticsUtteranceFilter> $filters
 * @property int $maxResults
 * @property string $nextToken
 */
class ListUtteranceAnalyticsDataRequest extends Request
{
    /**
     * @param array{
     *     botId: string,
     *     startDateTime: \Aws\Api\DateTimeResult,
     *     endDateTime: \Aws\Api\DateTimeResult,
     *     sortBy?: Shapes\UtteranceDataSortBy,
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
