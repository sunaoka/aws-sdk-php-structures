<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListBotRecommendations;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $botId
 * @property string|null $botVersion
 * @property string|null $localeId
 * @property list<Shapes\BotRecommendationSummary>|null $botRecommendationSummaries
 * @property string|null $nextToken
 */
class ListBotRecommendationsResponse extends Response
{
}
