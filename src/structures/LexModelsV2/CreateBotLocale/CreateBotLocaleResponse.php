<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\CreateBotLocale;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $botId
 * @property string|null $botVersion
 * @property string|null $localeName
 * @property string|null $localeId
 * @property string|null $description
 * @property double|null $nluIntentConfidenceThreshold
 * @property Shapes\VoiceSettings|null $voiceSettings
 * @property 'Creating'|'Building'|'Built'|'ReadyExpressTesting'|'Failed'|'Deleting'|'NotBuilt'|'Importing'|'Processing'|null $botLocaleStatus
 * @property \Aws\Api\DateTimeResult|null $creationDateTime
 * @property Shapes\GenerativeAISettings|null $generativeAISettings
 */
class CreateBotLocaleResponse extends Response
{
}
