<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\StopBotRecommendation;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $botId
 * @property string|null $botVersion
 * @property string|null $localeId
 * @property 'Processing'|'Deleting'|'Deleted'|'Downloading'|'Updating'|'Available'|'Failed'|'Stopping'|'Stopped'|null $botRecommendationStatus
 * @property string|null $botRecommendationId
 */
class StopBotRecommendationResponse extends Response
{
}
