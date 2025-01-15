<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\PutBot;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $name
 * @property string|null $description
 * @property list<Shapes\Intent>|null $intents
 * @property bool|null $enableModelImprovements
 * @property double|null $nluIntentConfidenceThreshold
 * @property Shapes\Prompt|null $clarificationPrompt
 * @property Shapes\Statement|null $abortStatement
 * @property 'BUILDING'|'READY'|'READY_BASIC_TESTING'|'FAILED'|'NOT_BUILT'|null $status
 * @property string|null $failureReason
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedDate
 * @property \Aws\Api\DateTimeResult|null $createdDate
 * @property int<60, 86400>|null $idleSessionTTLInSeconds
 * @property string|null $voiceId
 * @property string|null $checksum
 * @property string|null $version
 * @property 'de-DE'|'en-AU'|'en-GB'|'en-IN'|'en-US'|'es-419'|'es-ES'|'es-US'|'fr-FR'|'fr-CA'|'it-IT'|'ja-JP'|'ko-KR'|null $locale
 * @property bool|null $childDirected
 * @property bool|null $createVersion
 * @property bool|null $detectSentiment
 * @property list<Shapes\Tag>|null $tags
 */
class PutBotResponse extends Response
{
}
