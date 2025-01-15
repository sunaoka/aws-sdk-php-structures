<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListAggregatedUtterances;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $botId
 * @property string|null $botAliasId
 * @property string|null $botVersion
 * @property string $localeId
 * @property Shapes\UtteranceAggregationDuration $aggregationDuration
 * @property Shapes\AggregatedUtterancesSortBy|null $sortBy
 * @property list<Shapes\AggregatedUtterancesFilter>|null $filters
 * @property int<1, 1000>|null $maxResults
 * @property string|null $nextToken
 */
class ListAggregatedUtterancesRequest extends Request
{
    /**
     * @param array{
     *     botId: string,
     *     botAliasId?: string|null,
     *     botVersion?: string|null,
     *     localeId: string,
     *     aggregationDuration: Shapes\UtteranceAggregationDuration,
     *     sortBy?: Shapes\AggregatedUtterancesSortBy|null,
     *     filters?: list<Shapes\AggregatedUtterancesFilter>|null,
     *     maxResults?: int<1, 1000>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
