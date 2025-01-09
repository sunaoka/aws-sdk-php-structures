<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\PutBot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $description
 * @property list<Shapes\Intent> $intents
 * @property bool $enableModelImprovements
 * @property double $nluIntentConfidenceThreshold
 * @property Shapes\Prompt $clarificationPrompt
 * @property Shapes\Statement $abortStatement
 * @property int $idleSessionTTLInSeconds
 * @property string $voiceId
 * @property string $checksum
 * @property 'SAVE'|'BUILD' $processBehavior
 * @property 'de-DE'|'en-AU'|'en-GB'|'en-IN'|'en-US'|'es-419'|'es-ES'|'es-US'|'fr-FR'|'fr-CA'|'it-IT'|'ja-JP'|'ko-KR' $locale
 * @property bool $childDirected
 * @property bool $detectSentiment
 * @property bool $createVersion
 * @property list<Shapes\Tag> $tags
 */
class PutBotRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     description?: string,
     *     intents?: list<Shapes\Intent>,
     *     enableModelImprovements?: bool,
     *     nluIntentConfidenceThreshold?: double,
     *     clarificationPrompt?: Shapes\Prompt,
     *     abortStatement?: Shapes\Statement,
     *     idleSessionTTLInSeconds?: int,
     *     voiceId?: string,
     *     checksum?: string,
     *     processBehavior?: 'SAVE'|'BUILD',
     *     locale: 'de-DE'|'en-AU'|'en-GB'|'en-IN'|'en-US'|'es-419'|'es-ES'|'es-US'|'fr-FR'|'fr-CA'|'it-IT'|'ja-JP'|'ko-KR',
     *     childDirected: bool,
     *     detectSentiment?: bool,
     *     createVersion?: bool,
     *     tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
