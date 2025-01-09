<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\StartBotRecommendation;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $botId
 * @property string $botVersion
 * @property string $localeId
 * @property 'Processing'|'Deleting'|'Deleted'|'Downloading'|'Updating'|'Available'|'Failed'|'Stopping'|'Stopped' $botRecommendationStatus
 * @property string $botRecommendationId
 * @property \Aws\Api\DateTimeResult $creationDateTime
 * @property Shapes\TranscriptSourceSetting $transcriptSourceSetting
 * @property Shapes\EncryptionSetting $encryptionSetting
 */
class StartBotRecommendationResponse extends Response
{
}
