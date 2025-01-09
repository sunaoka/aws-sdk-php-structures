<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\GetMediaInsightsPipelineConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'en-US'|'en-GB'|'es-US'|'fr-CA'|'fr-FR'|'en-AU'|'it-IT'|'de-DE'|'pt-BR' $LanguageCode
 * @property string $VocabularyName
 * @property string $VocabularyFilterName
 * @property 'remove'|'mask'|'tag' $VocabularyFilterMethod
 * @property string $LanguageModelName
 * @property bool $EnablePartialResultsStabilization
 * @property 'high'|'medium'|'low' $PartialResultsStability
 * @property 'PII' $ContentIdentificationType
 * @property 'PII' $ContentRedactionType
 * @property string $PiiEntityTypes
 * @property bool $FilterPartialResults
 * @property PostCallAnalyticsSettings $PostCallAnalyticsSettings
 * @property list<string> $CallAnalyticsStreamCategories
 */
class AmazonTranscribeCallAnalyticsProcessorConfiguration extends Shape
{
    /**
     * @param array{
     *     LanguageCode: 'en-US'|'en-GB'|'es-US'|'fr-CA'|'fr-FR'|'en-AU'|'it-IT'|'de-DE'|'pt-BR',
     *     VocabularyName?: string,
     *     VocabularyFilterName?: string,
     *     VocabularyFilterMethod?: 'remove'|'mask'|'tag',
     *     LanguageModelName?: string,
     *     EnablePartialResultsStabilization?: bool,
     *     PartialResultsStability?: 'high'|'medium'|'low',
     *     ContentIdentificationType?: 'PII',
     *     ContentRedactionType?: 'PII',
     *     PiiEntityTypes?: string,
     *     FilterPartialResults?: bool,
     *     PostCallAnalyticsSettings?: PostCallAnalyticsSettings,
     *     CallAnalyticsStreamCategories?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
