<?php

namespace Sunaoka\Aws\Structures\Chime\StartMeetingTranscription\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'en-US'|'en-GB'|'es-US'|'fr-CA'|'fr-FR'|'en-AU'|'it-IT'|'de-DE'|'pt-BR'|'ja-JP'|'ko-KR'|'zh-CN'|'th-TH'|'hi-IN'|null $LanguageCode
 * @property 'remove'|'mask'|'tag'|null $VocabularyFilterMethod
 * @property string|null $VocabularyFilterName
 * @property string|null $VocabularyName
 * @property 'us-east-2'|'us-east-1'|'us-west-2'|'ap-northeast-2'|'ap-southeast-2'|'ap-northeast-1'|'ca-central-1'|'eu-central-1'|'eu-west-1'|'eu-west-2'|'sa-east-1'|'auto'|null $Region
 * @property bool|null $EnablePartialResultsStabilization
 * @property 'low'|'medium'|'high'|null $PartialResultsStability
 * @property 'PII'|null $ContentIdentificationType
 * @property 'PII'|null $ContentRedactionType
 * @property string|null $PiiEntityTypes
 * @property string|null $LanguageModelName
 * @property bool|null $IdentifyLanguage
 * @property string|null $LanguageOptions
 * @property 'en-US'|'en-GB'|'es-US'|'fr-CA'|'fr-FR'|'en-AU'|'it-IT'|'de-DE'|'pt-BR'|'ja-JP'|'ko-KR'|'zh-CN'|'th-TH'|'hi-IN'|null $PreferredLanguage
 * @property string|null $VocabularyNames
 * @property string|null $VocabularyFilterNames
 */
class EngineTranscribeSettings extends Shape
{
    /**
     * @param array{
     *     LanguageCode?: 'en-US'|'en-GB'|'es-US'|'fr-CA'|'fr-FR'|'en-AU'|'it-IT'|'de-DE'|'pt-BR'|'ja-JP'|'ko-KR'|'zh-CN'|'th-TH'|'hi-IN'|null,
     *     VocabularyFilterMethod?: 'remove'|'mask'|'tag'|null,
     *     VocabularyFilterName?: string|null,
     *     VocabularyName?: string|null,
     *     Region?: 'us-east-2'|'us-east-1'|'us-west-2'|'ap-northeast-2'|'ap-southeast-2'|'ap-northeast-1'|'ca-central-1'|'eu-central-1'|'eu-west-1'|'eu-west-2'|'sa-east-1'|'auto'|null,
     *     EnablePartialResultsStabilization?: bool|null,
     *     PartialResultsStability?: 'low'|'medium'|'high'|null,
     *     ContentIdentificationType?: 'PII'|null,
     *     ContentRedactionType?: 'PII'|null,
     *     PiiEntityTypes?: string|null,
     *     LanguageModelName?: string|null,
     *     IdentifyLanguage?: bool|null,
     *     LanguageOptions?: string|null,
     *     PreferredLanguage?: 'en-US'|'en-GB'|'es-US'|'fr-CA'|'fr-FR'|'en-AU'|'it-IT'|'de-DE'|'pt-BR'|'ja-JP'|'ko-KR'|'zh-CN'|'th-TH'|'hi-IN'|null,
     *     VocabularyNames?: string|null,
     *     VocabularyFilterNames?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
