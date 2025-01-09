<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListRecommendedIntents;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $botId
 * @property string $botVersion
 * @property string $localeId
 * @property string $botRecommendationId
 * @property list<Shapes\RecommendedIntentSummary> $summaryList
 * @property string $nextToken
 */
class ListRecommendedIntentsResponse extends Response
{
}
