<?php

namespace Sunaoka\Aws\Structures\Connect\AssociateDefaultVocabulary;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property 'ar-AE'|'de-CH'|'de-DE'|'en-AB'|'en-AU'|'en-GB'|'en-IE'|'en-IN'|'en-US'|'en-WL'|'es-ES'|'es-US'|'fr-CA'|'fr-FR'|'hi-IN'|'it-IT'|'ja-JP'|'ko-KR'|'pt-BR'|'pt-PT'|'zh-CN'|'en-NZ'|'en-ZA'|'ca-ES'|'da-DK'|'fi-FI'|'id-ID'|'ms-MY'|'nl-NL'|'no-NO'|'pl-PL'|'sv-SE'|'tl-PH' $LanguageCode
 * @property string|null $VocabularyId
 */
class AssociateDefaultVocabularyRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     LanguageCode: 'ar-AE'|'de-CH'|'de-DE'|'en-AB'|'en-AU'|'en-GB'|'en-IE'|'en-IN'|'en-US'|'en-WL'|'es-ES'|'es-US'|'fr-CA'|'fr-FR'|'hi-IN'|'it-IT'|'ja-JP'|'ko-KR'|'pt-BR'|'pt-PT'|'zh-CN'|'en-NZ'|'en-ZA'|'ca-ES'|'da-DK'|'fi-FI'|'id-ID'|'ms-MY'|'nl-NL'|'no-NO'|'pl-PL'|'sv-SE'|'tl-PH',
     *     VocabularyId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
