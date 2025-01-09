<?php

namespace Sunaoka\Aws\Structures\Translate\ListLanguages;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'de'|'en'|'es'|'fr'|'it'|'ja'|'ko'|'pt'|'zh'|'zh-TW' $DisplayLanguageCode
 * @property string $NextToken
 * @property int<1, 500> $MaxResults
 */
class ListLanguagesRequest extends Request
{
    /**
     * @param array{
     *     DisplayLanguageCode?: 'de'|'en'|'es'|'fr'|'it'|'ja'|'ko'|'pt'|'zh'|'zh-TW',
     *     NextToken?: string,
     *     MaxResults?: int<1, 500>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
