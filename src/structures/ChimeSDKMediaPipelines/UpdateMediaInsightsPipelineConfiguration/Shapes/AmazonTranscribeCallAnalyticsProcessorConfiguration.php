<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\UpdateMediaInsightsPipelineConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'en-US'|'en-GB'|'es-US'|'fr-CA'|'fr-FR'|'en-AU'|'it-IT'|'de-DE'|'pt-BR' $LanguageCode
 * @property string|null $VocabularyName
 * @property string|null $VocabularyFilterName
 * @property 'remove'|'mask'|'tag'|null $VocabularyFilterMethod
 * @property string|null $LanguageModelName
 * @property bool|null $EnablePartialResultsStabilization
 * @property 'high'|'medium'|'low'|null $PartialResultsStability
 * @property 'PII'|null $ContentIdentificationType
 * @property 'PII'|null $ContentRedactionType
 * @property string|null $PiiEntityTypes
 * @property bool|null $FilterPartialResults
 * @property PostCallAnalyticsSettings|null $PostCallAnalyticsSettings
 * @property list<string>|null $CallAnalyticsStreamCategories
 */
class AmazonTranscribeCallAnalyticsProcessorConfiguration extends Shape
{
    /**
     * @param array{
     *     LanguageCode: 'en-US'|'en-GB'|'es-US'|'fr-CA'|'fr-FR'|'en-AU'|'it-IT'|'de-DE'|'pt-BR',
     *     VocabularyName?: string|null,
     *     VocabularyFilterName?: string|null,
     *     VocabularyFilterMethod?: 'remove'|'mask'|'tag'|null,
     *     LanguageModelName?: string|null,
     *     EnablePartialResultsStabilization?: bool|null,
     *     PartialResultsStability?: 'high'|'medium'|'low'|null,
     *     ContentIdentificationType?: 'PII'|null,
     *     ContentRedactionType?: 'PII'|null,
     *     PiiEntityTypes?: string|null,
     *     FilterPartialResults?: bool|null,
     *     PostCallAnalyticsSettings?: PostCallAnalyticsSettings|null,
     *     CallAnalyticsStreamCategories?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
