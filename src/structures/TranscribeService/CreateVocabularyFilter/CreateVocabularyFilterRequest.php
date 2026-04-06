<?php

namespace Sunaoka\Aws\Structures\TranscribeService\CreateVocabularyFilter;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VocabularyFilterName
 * @property 'af-ZA'|'ar-AE'|'ar-SA'|'da-DK'|'de-CH'|'de-DE'|'en-AB'|'en-AU'|'en-GB'|'en-IE'|'en-IN'|'en-US'|'en-WL'|'es-ES'|'es-US'|'fa-IR'|'fr-CA'|'fr-FR'|'he-IL'|'hi-IN'|'id-ID'|'it-IT'|'ja-JP'|'ko-KR'|'ms-MY'|'nl-NL'|'pt-BR'|'pt-PT'|'ru-RU'|'ta-IN'|'te-IN'|'tr-TR'|'zh-CN'|'zh-TW'|'th-TH'|'en-ZA'|'en-NZ'|'vi-VN'|'sv-SE' $LanguageCode
 * @property list<string>|null $Words
 * @property string|null $VocabularyFilterFileUri
 * @property list<Shapes\Tag>|null $Tags
 * @property string|null $DataAccessRoleArn
 */
class CreateVocabularyFilterRequest extends Request
{
    /**
     * @param array{
     *     VocabularyFilterName: string,
     *     LanguageCode: 'af-ZA'|'ar-AE'|'ar-SA'|'da-DK'|'de-CH'|'de-DE'|'en-AB'|'en-AU'|'en-GB'|'en-IE'|'en-IN'|'en-US'|'en-WL'|'es-ES'|'es-US'|'fa-IR'|'fr-CA'|'fr-FR'|'he-IL'|'hi-IN'|'id-ID'|'it-IT'|'ja-JP'|'ko-KR'|'ms-MY'|'nl-NL'|'pt-BR'|'pt-PT'|'ru-RU'|'ta-IN'|'te-IN'|'tr-TR'|'zh-CN'|'zh-TW'|'th-TH'|'en-ZA'|'en-NZ'|'vi-VN'|'sv-SE',
     *     Words?: list<string>|null,
     *     VocabularyFilterFileUri?: string|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     DataAccessRoleArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
