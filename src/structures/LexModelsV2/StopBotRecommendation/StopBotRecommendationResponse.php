<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\StopBotRecommendation;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $botId
 * @property string $botVersion
 * @property string $localeId
 * @property 'Processing'|'Deleting'|'Deleted'|'Downloading'|'Updating'|'Available'|'Failed'|'Stopping'|'Stopped' $botRecommendationStatus
 * @property string $botRecommendationId
 */
class StopBotRecommendationResponse extends Response
{
}
