<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\StartBotRecommendation;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $botId
 * @property string|null $botVersion
 * @property string|null $localeId
 * @property 'Processing'|'Deleting'|'Deleted'|'Downloading'|'Updating'|'Available'|'Failed'|'Stopping'|'Stopped'|null $botRecommendationStatus
 * @property string|null $botRecommendationId
 * @property \Aws\Api\DateTimeResult|null $creationDateTime
 * @property Shapes\TranscriptSourceSetting|null $transcriptSourceSetting
 * @property Shapes\EncryptionSetting|null $encryptionSetting
 */
class StartBotRecommendationResponse extends Response
{
}
