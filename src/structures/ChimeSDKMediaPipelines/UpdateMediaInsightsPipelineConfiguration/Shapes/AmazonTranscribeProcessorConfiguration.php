<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\UpdateMediaInsightsPipelineConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'en-US'|'en-GB'|'es-US'|'fr-CA'|'fr-FR'|'en-AU'|'it-IT'|'de-DE'|'pt-BR' $LanguageCode
 * @property string $VocabularyName
 * @property string $VocabularyFilterName
 * @property 'remove'|'mask'|'tag' $VocabularyFilterMethod
 * @property bool $ShowSpeakerLabel
 * @property bool $EnablePartialResultsStabilization
 * @property 'high'|'medium'|'low' $PartialResultsStability
 * @property 'PII' $ContentIdentificationType
 * @property 'PII' $ContentRedactionType
 * @property string $PiiEntityTypes
 * @property string $LanguageModelName
 * @property bool $FilterPartialResults
 * @property bool $IdentifyLanguage
 * @property bool $IdentifyMultipleLanguages
 * @property string $LanguageOptions
 * @property 'en-US'|'en-GB'|'es-US'|'fr-CA'|'fr-FR'|'en-AU'|'it-IT'|'de-DE'|'pt-BR' $PreferredLanguage
 * @property string $VocabularyNames
 * @property string $VocabularyFilterNames
 */
class AmazonTranscribeProcessorConfiguration extends Shape
{
    /**
     * @param array{
     *     LanguageCode?: 'en-US'|'en-GB'|'es-US'|'fr-CA'|'fr-FR'|'en-AU'|'it-IT'|'de-DE'|'pt-BR',
     *     VocabularyName?: string,
     *     VocabularyFilterName?: string,
     *     VocabularyFilterMethod?: 'remove'|'mask'|'tag',
     *     ShowSpeakerLabel?: bool,
     *     EnablePartialResultsStabilization?: bool,
     *     PartialResultsStability?: 'high'|'medium'|'low',
     *     ContentIdentificationType?: 'PII',
     *     ContentRedactionType?: 'PII',
     *     PiiEntityTypes?: string,
     *     LanguageModelName?: string,
     *     FilterPartialResults?: bool,
     *     IdentifyLanguage?: bool,
     *     IdentifyMultipleLanguages?: bool,
     *     LanguageOptions?: string,
     *     PreferredLanguage?: 'en-US'|'en-GB'|'es-US'|'fr-CA'|'fr-FR'|'en-AU'|'it-IT'|'de-DE'|'pt-BR',
     *     VocabularyNames?: string,
     *     VocabularyFilterNames?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
