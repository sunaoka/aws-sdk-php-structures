<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListAggregatedUtterances;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $botId
 * @property string $botAliasId
 * @property string $botVersion
 * @property string $localeId
 * @property Shapes\UtteranceAggregationDuration $aggregationDuration
 * @property Shapes\AggregatedUtterancesSortBy $sortBy
 * @property list<Shapes\AggregatedUtterancesFilter> $filters
 * @property int $maxResults
 * @property string $nextToken
 */
class ListAggregatedUtterancesRequest extends Request
{
    /**
     * @param array{
     *     botId: string,
     *     botAliasId?: string,
     *     botVersion?: string,
     *     localeId: string,
     *     aggregationDuration: Shapes\UtteranceAggregationDuration,
     *     sortBy?: Shapes\AggregatedUtterancesSortBy,
     *     filters?: list<Shapes\AggregatedUtterancesFilter>,
     *     maxResults?: int,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
