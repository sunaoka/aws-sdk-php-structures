<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListAggregatedUtterances;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $botId
 * @property string|null $botAliasId
 * @property string|null $botVersion
 * @property string|null $localeId
 * @property Shapes\UtteranceAggregationDuration|null $aggregationDuration
 * @property \Aws\Api\DateTimeResult|null $aggregationWindowStartTime
 * @property \Aws\Api\DateTimeResult|null $aggregationWindowEndTime
 * @property \Aws\Api\DateTimeResult|null $aggregationLastRefreshedDateTime
 * @property list<Shapes\AggregatedUtterancesSummary>|null $aggregatedUtterancesSummaries
 * @property string|null $nextToken
 */
class ListAggregatedUtterancesResponse extends Response
{
}
