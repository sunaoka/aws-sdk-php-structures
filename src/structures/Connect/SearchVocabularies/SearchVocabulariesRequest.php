<?php

namespace Sunaoka\Aws\Structures\Connect\SearchVocabularies;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 * @property 'CREATION_IN_PROGRESS'|'ACTIVE'|'CREATION_FAILED'|'DELETE_IN_PROGRESS'|null $State
 * @property string|null $NameStartsWith
 * @property 'ar-AE'|'de-CH'|'de-DE'|'en-AB'|'en-AU'|'en-GB'|'en-IE'|'en-IN'|'en-US'|'en-WL'|'es-ES'|'es-US'|'fr-CA'|'fr-FR'|'hi-IN'|'it-IT'|'ja-JP'|'ko-KR'|'pt-BR'|'pt-PT'|'zh-CN'|'en-NZ'|'en-ZA'|'ca-ES'|'da-DK'|'fi-FI'|'id-ID'|'ms-MY'|'nl-NL'|'no-NO'|'pl-PL'|'sv-SE'|'tl-PH'|null $LanguageCode
 */
class SearchVocabulariesRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null,
     *     State?: 'CREATION_IN_PROGRESS'|'ACTIVE'|'CREATION_FAILED'|'DELETE_IN_PROGRESS'|null,
     *     NameStartsWith?: string|null,
     *     LanguageCode?: 'ar-AE'|'de-CH'|'de-DE'|'en-AB'|'en-AU'|'en-GB'|'en-IE'|'en-IN'|'en-US'|'en-WL'|'es-ES'|'es-US'|'fr-CA'|'fr-FR'|'hi-IN'|'it-IT'|'ja-JP'|'ko-KR'|'pt-BR'|'pt-PT'|'zh-CN'|'en-NZ'|'en-ZA'|'ca-ES'|'da-DK'|'fi-FI'|'id-ID'|'ms-MY'|'nl-NL'|'no-NO'|'pl-PL'|'sv-SE'|'tl-PH'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
