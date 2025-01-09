<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListAggregatedUtterances;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $botId
 * @property string $botAliasId
 * @property string $botVersion
 * @property string $localeId
 * @property Shapes\UtteranceAggregationDuration $aggregationDuration
 * @property \Aws\Api\DateTimeResult $aggregationWindowStartTime
 * @property \Aws\Api\DateTimeResult $aggregationWindowEndTime
 * @property \Aws\Api\DateTimeResult $aggregationLastRefreshedDateTime
 * @property list<Shapes\AggregatedUtterancesSummary> $aggregatedUtterancesSummaries
 * @property string $nextToken
 */
class ListAggregatedUtterancesResponse extends Response
{
}
