<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\CreateBotLocale;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $botId
 * @property string $botVersion
 * @property string $localeName
 * @property string $localeId
 * @property string $description
 * @property double $nluIntentConfidenceThreshold
 * @property Shapes\VoiceSettings $voiceSettings
 * @property 'Creating'|'Building'|'Built'|'ReadyExpressTesting'|'Failed'|'Deleting'|'NotBuilt'|'Importing'|'Processing' $botLocaleStatus
 * @property \Aws\Api\DateTimeResult $creationDateTime
 * @property Shapes\GenerativeAISettings $generativeAISettings
 */
class CreateBotLocaleResponse extends Response
{
}
