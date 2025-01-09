<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DescribeBotRecommendation;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $botId
 * @property string $botVersion
 * @property string $localeId
 * @property 'Processing'|'Deleting'|'Deleted'|'Downloading'|'Updating'|'Available'|'Failed'|'Stopping'|'Stopped' $botRecommendationStatus
 * @property string $botRecommendationId
 * @property list<string> $failureReasons
 * @property \Aws\Api\DateTimeResult $creationDateTime
 * @property \Aws\Api\DateTimeResult $lastUpdatedDateTime
 * @property Shapes\TranscriptSourceSetting $transcriptSourceSetting
 * @property Shapes\EncryptionSetting $encryptionSetting
 * @property Shapes\BotRecommendationResults $botRecommendationResults
 */
class DescribeBotRecommendationResponse extends Response
{
}
