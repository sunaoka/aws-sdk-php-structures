<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\UpdateBotLocale;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $botId
 * @property string $botVersion
 * @property string $localeId
 * @property string $localeName
 * @property string $description
 * @property double $nluIntentConfidenceThreshold
 * @property Shapes\VoiceSettings $voiceSettings
 * @property 'Creating'|'Building'|'Built'|'ReadyExpressTesting'|'Failed'|'Deleting'|'NotBuilt'|'Importing'|'Processing' $botLocaleStatus
 * @property list<string> $failureReasons
 * @property \Aws\Api\DateTimeResult $creationDateTime
 * @property \Aws\Api\DateTimeResult $lastUpdatedDateTime
 * @property list<string> $recommendedActions
 * @property Shapes\GenerativeAISettings $generativeAISettings
 */
class UpdateBotLocaleResponse extends Response
{
}
