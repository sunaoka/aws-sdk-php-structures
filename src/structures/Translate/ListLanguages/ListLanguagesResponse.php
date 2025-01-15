<?php

namespace Sunaoka\Aws\Structures\Translate\ListLanguages;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\Language>|null $Languages
 * @property 'de'|'en'|'es'|'fr'|'it'|'ja'|'ko'|'pt'|'zh'|'zh-TW'|null $DisplayLanguageCode
 * @property string|null $NextToken
 */
class ListLanguagesResponse extends Response
{
}
