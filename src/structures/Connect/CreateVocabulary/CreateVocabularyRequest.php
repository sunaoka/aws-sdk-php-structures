<?php

namespace Sunaoka\Aws\Structures\Connect\CreateVocabulary;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClientToken
 * @property string $InstanceId
 * @property string $VocabularyName
 * @property 'ar-AE'|'de-CH'|'de-DE'|'en-AB'|'en-AU'|'en-GB'|'en-IE'|'en-IN'|'en-US'|'en-WL'|'es-ES'|'es-US'|'fr-CA'|'fr-FR'|'hi-IN'|'it-IT'|'ja-JP'|'ko-KR'|'pt-BR'|'pt-PT'|'zh-CN'|'en-NZ'|'en-ZA'|'ca-ES'|'da-DK'|'fi-FI'|'id-ID'|'ms-MY'|'nl-NL'|'no-NO'|'pl-PL'|'sv-SE'|'tl-PH' $LanguageCode
 * @property string $Content
 * @property array<string, string> $Tags
 */
class CreateVocabularyRequest extends Request
{
    /**
     * @param array{
     *     ClientToken?: string,
     *     InstanceId: string,
     *     VocabularyName: string,
     *     LanguageCode: 'ar-AE'|'de-CH'|'de-DE'|'en-AB'|'en-AU'|'en-GB'|'en-IE'|'en-IN'|'en-US'|'en-WL'|'es-ES'|'es-US'|'fr-CA'|'fr-FR'|'hi-IN'|'it-IT'|'ja-JP'|'ko-KR'|'pt-BR'|'pt-PT'|'zh-CN'|'en-NZ'|'en-ZA'|'ca-ES'|'da-DK'|'fi-FI'|'id-ID'|'ms-MY'|'nl-NL'|'no-NO'|'pl-PL'|'sv-SE'|'tl-PH',
     *     Content: string,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
