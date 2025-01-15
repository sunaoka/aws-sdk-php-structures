<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\PutBot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string|null $description
 * @property list<Shapes\Intent>|null $intents
 * @property bool|null $enableModelImprovements
 * @property double|null $nluIntentConfidenceThreshold
 * @property Shapes\Prompt|null $clarificationPrompt
 * @property Shapes\Statement|null $abortStatement
 * @property int<60, 86400>|null $idleSessionTTLInSeconds
 * @property string|null $voiceId
 * @property string|null $checksum
 * @property 'SAVE'|'BUILD'|null $processBehavior
 * @property 'de-DE'|'en-AU'|'en-GB'|'en-IN'|'en-US'|'es-419'|'es-ES'|'es-US'|'fr-FR'|'fr-CA'|'it-IT'|'ja-JP'|'ko-KR' $locale
 * @property bool $childDirected
 * @property bool|null $detectSentiment
 * @property bool|null $createVersion
 * @property list<Shapes\Tag>|null $tags
 */
class PutBotRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     description?: string|null,
     *     intents?: list<Shapes\Intent>|null,
     *     enableModelImprovements?: bool|null,
     *     nluIntentConfidenceThreshold?: double|null,
     *     clarificationPrompt?: Shapes\Prompt|null,
     *     abortStatement?: Shapes\Statement|null,
     *     idleSessionTTLInSeconds?: int<60, 86400>|null,
     *     voiceId?: string|null,
     *     checksum?: string|null,
     *     processBehavior?: 'SAVE'|'BUILD'|null,
     *     locale: 'de-DE'|'en-AU'|'en-GB'|'en-IN'|'en-US'|'es-419'|'es-ES'|'es-US'|'fr-FR'|'fr-CA'|'it-IT'|'ja-JP'|'ko-KR',
     *     childDirected: bool,
     *     detectSentiment?: bool|null,
     *     createVersion?: bool|null,
     *     tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
