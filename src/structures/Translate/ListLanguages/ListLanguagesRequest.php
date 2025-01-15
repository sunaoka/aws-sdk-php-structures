<?php

namespace Sunaoka\Aws\Structures\Translate\ListLanguages;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'de'|'en'|'es'|'fr'|'it'|'ja'|'ko'|'pt'|'zh'|'zh-TW'|null $DisplayLanguageCode
 * @property string|null $NextToken
 * @property int<1, 500>|null $MaxResults
 */
class ListLanguagesRequest extends Request
{
    /**
     * @param array{
     *     DisplayLanguageCode?: 'de'|'en'|'es'|'fr'|'it'|'ja'|'ko'|'pt'|'zh'|'zh-TW'|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 500>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
