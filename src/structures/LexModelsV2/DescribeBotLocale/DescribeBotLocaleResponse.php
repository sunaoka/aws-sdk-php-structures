<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DescribeBotLocale;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $botId
 * @property string|null $botVersion
 * @property string|null $localeId
 * @property string|null $localeName
 * @property string|null $description
 * @property double|null $nluIntentConfidenceThreshold
 * @property Shapes\VoiceSettings|null $voiceSettings
 * @property Shapes\UnifiedSpeechSettings|null $unifiedSpeechSettings
 * @property Shapes\SpeechRecognitionSettings|null $speechRecognitionSettings
 * @property int|null $intentsCount
 * @property int|null $slotTypesCount
 * @property 'Creating'|'Building'|'Built'|'ReadyExpressTesting'|'Failed'|'Deleting'|'NotBuilt'|'Importing'|'Processing'|null $botLocaleStatus
 * @property list<string>|null $failureReasons
 * @property \Aws\Api\DateTimeResult|null $creationDateTime
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedDateTime
 * @property \Aws\Api\DateTimeResult|null $lastBuildSubmittedDateTime
 * @property list<Shapes\BotLocaleHistoryEvent>|null $botLocaleHistoryEvents
 * @property list<string>|null $recommendedActions
 * @property Shapes\GenerativeAISettings|null $generativeAISettings
 * @property 'Default'|'HighNoiseTolerance'|'MaximumNoiseTolerance'|null $speechDetectionSensitivity
 */
class DescribeBotLocaleResponse extends Response
{
}
