<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\UpdateMediaInsightsPipelineConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'en-US'|'en-GB'|'es-US'|'fr-CA'|'fr-FR'|'en-AU'|'it-IT'|'de-DE'|'pt-BR'|null $LanguageCode
 * @property string|null $VocabularyName
 * @property string|null $VocabularyFilterName
 * @property 'remove'|'mask'|'tag'|null $VocabularyFilterMethod
 * @property bool|null $ShowSpeakerLabel
 * @property bool|null $EnablePartialResultsStabilization
 * @property 'high'|'medium'|'low'|null $PartialResultsStability
 * @property 'PII'|null $ContentIdentificationType
 * @property 'PII'|null $ContentRedactionType
 * @property string|null $PiiEntityTypes
 * @property string|null $LanguageModelName
 * @property bool|null $FilterPartialResults
 * @property bool|null $IdentifyLanguage
 * @property bool|null $IdentifyMultipleLanguages
 * @property string|null $LanguageOptions
 * @property 'en-US'|'en-GB'|'es-US'|'fr-CA'|'fr-FR'|'en-AU'|'it-IT'|'de-DE'|'pt-BR'|null $PreferredLanguage
 * @property string|null $VocabularyNames
 * @property string|null $VocabularyFilterNames
 */
class AmazonTranscribeProcessorConfiguration extends Shape
{
    /**
     * @param array{
     *     LanguageCode?: 'en-US'|'en-GB'|'es-US'|'fr-CA'|'fr-FR'|'en-AU'|'it-IT'|'de-DE'|'pt-BR'|null,
     *     VocabularyName?: string|null,
     *     VocabularyFilterName?: string|null,
     *     VocabularyFilterMethod?: 'remove'|'mask'|'tag'|null,
     *     ShowSpeakerLabel?: bool|null,
     *     EnablePartialResultsStabilization?: bool|null,
     *     PartialResultsStability?: 'high'|'medium'|'low'|null,
     *     ContentIdentificationType?: 'PII'|null,
     *     ContentRedactionType?: 'PII'|null,
     *     PiiEntityTypes?: string|null,
     *     LanguageModelName?: string|null,
     *     FilterPartialResults?: bool|null,
     *     IdentifyLanguage?: bool|null,
     *     IdentifyMultipleLanguages?: bool|null,
     *     LanguageOptions?: string|null,
     *     PreferredLanguage?: 'en-US'|'en-GB'|'es-US'|'fr-CA'|'fr-FR'|'en-AU'|'it-IT'|'de-DE'|'pt-BR'|null,
     *     VocabularyNames?: string|null,
     *     VocabularyFilterNames?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
