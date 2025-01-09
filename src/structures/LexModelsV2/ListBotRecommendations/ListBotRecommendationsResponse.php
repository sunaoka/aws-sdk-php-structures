<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListBotRecommendations;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $botId
 * @property string $botVersion
 * @property string $localeId
 * @property list<Shapes\BotRecommendationSummary> $botRecommendationSummaries
 * @property string $nextToken
 */
class ListBotRecommendationsResponse extends Response
{
}
