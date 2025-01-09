<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\PutBot;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $name
 * @property string $description
 * @property list<Shapes\Intent> $intents
 * @property bool $enableModelImprovements
 * @property double $nluIntentConfidenceThreshold
 * @property Shapes\Prompt $clarificationPrompt
 * @property Shapes\Statement $abortStatement
 * @property 'BUILDING'|'READY'|'READY_BASIC_TESTING'|'FAILED'|'NOT_BUILT' $status
 * @property string $failureReason
 * @property \Aws\Api\DateTimeResult $lastUpdatedDate
 * @property \Aws\Api\DateTimeResult $createdDate
 * @property int<60, 86400> $idleSessionTTLInSeconds
 * @property string $voiceId
 * @property string $checksum
 * @property string $version
 * @property 'de-DE'|'en-AU'|'en-GB'|'en-IN'|'en-US'|'es-419'|'es-ES'|'es-US'|'fr-FR'|'fr-CA'|'it-IT'|'ja-JP'|'ko-KR' $locale
 * @property bool $childDirected
 * @property bool $createVersion
 * @property bool $detectSentiment
 * @property list<Shapes\Tag> $tags
 */
class PutBotResponse extends Response
{
}
