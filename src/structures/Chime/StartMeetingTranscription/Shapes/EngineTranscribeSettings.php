<?php

namespace Sunaoka\Aws\Structures\Chime\StartMeetingTranscription\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'en-US'|'en-GB'|'es-US'|'fr-CA'|'fr-FR'|'en-AU'|'it-IT'|'de-DE'|'pt-BR'|'ja-JP'|'ko-KR'|'zh-CN'|'th-TH'|'hi-IN' $LanguageCode
 * @property 'remove'|'mask'|'tag' $VocabularyFilterMethod
 * @property string $VocabularyFilterName
 * @property string $VocabularyName
 * @property 'us-east-2'|'us-east-1'|'us-west-2'|'ap-northeast-2'|'ap-southeast-2'|'ap-northeast-1'|'ca-central-1'|'eu-central-1'|'eu-west-1'|'eu-west-2'|'sa-east-1'|'auto' $Region
 * @property bool $EnablePartialResultsStabilization
 * @property 'low'|'medium'|'high' $PartialResultsStability
 * @property 'PII' $ContentIdentificationType
 * @property 'PII' $ContentRedactionType
 * @property string $PiiEntityTypes
 * @property string $LanguageModelName
 * @property bool $IdentifyLanguage
 * @property string $LanguageOptions
 * @property 'en-US'|'en-GB'|'es-US'|'fr-CA'|'fr-FR'|'en-AU'|'it-IT'|'de-DE'|'pt-BR'|'ja-JP'|'ko-KR'|'zh-CN'|'th-TH'|'hi-IN' $PreferredLanguage
 * @property string $VocabularyNames
 * @property string $VocabularyFilterNames
 */
class EngineTranscribeSettings extends Shape
{
    /**
     * @param array{
     *     LanguageCode?: 'en-US'|'en-GB'|'es-US'|'fr-CA'|'fr-FR'|'en-AU'|'it-IT'|'de-DE'|'pt-BR'|'ja-JP'|'ko-KR'|'zh-CN'|'th-TH'|'hi-IN',
     *     VocabularyFilterMethod?: 'remove'|'mask'|'tag',
     *     VocabularyFilterName?: string,
     *     VocabularyName?: string,
     *     Region?: 'us-east-2'|'us-east-1'|'us-west-2'|'ap-northeast-2'|'ap-southeast-2'|'ap-northeast-1'|'ca-central-1'|'eu-central-1'|'eu-west-1'|'eu-west-2'|'sa-east-1'|'auto',
     *     EnablePartialResultsStabilization?: bool,
     *     PartialResultsStability?: 'low'|'medium'|'high',
     *     ContentIdentificationType?: 'PII',
     *     ContentRedactionType?: 'PII',
     *     PiiEntityTypes?: string,
     *     LanguageModelName?: string,
     *     IdentifyLanguage?: bool,
     *     LanguageOptions?: string,
     *     PreferredLanguage?: 'en-US'|'en-GB'|'es-US'|'fr-CA'|'fr-FR'|'en-AU'|'it-IT'|'de-DE'|'pt-BR'|'ja-JP'|'ko-KR'|'zh-CN'|'th-TH'|'hi-IN',
     *     VocabularyNames?: string,
     *     VocabularyFilterNames?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
