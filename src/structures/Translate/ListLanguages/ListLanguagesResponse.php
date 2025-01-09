<?php

namespace Sunaoka\Aws\Structures\Translate\ListLanguages;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\Language> $Languages
 * @property 'de'|'en'|'es'|'fr'|'it'|'ja'|'ko'|'pt'|'zh'|'zh-TW' $DisplayLanguageCode
 * @property string $NextToken
 */
class ListLanguagesResponse extends Response
{
}
