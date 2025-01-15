<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\UpdateBotLocale;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $botId
 * @property string|null $botVersion
 * @property string|null $localeId
 * @property string|null $localeName
 * @property string|null $description
 * @property double|null $nluIntentConfidenceThreshold
 * @property Shapes\VoiceSettings|null $voiceSettings
 * @property 'Creating'|'Building'|'Built'|'ReadyExpressTesting'|'Failed'|'Deleting'|'NotBuilt'|'Importing'|'Processing'|null $botLocaleStatus
 * @property list<string>|null $failureReasons
 * @property \Aws\Api\DateTimeResult|null $creationDateTime
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedDateTime
 * @property list<string>|null $recommendedActions
 * @property Shapes\GenerativeAISettings|null $generativeAISettings
 */
class UpdateBotLocaleResponse extends Response
{
}
