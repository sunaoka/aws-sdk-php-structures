<?php

namespace Sunaoka\Aws\Structures\Notifications\GetNotificationEvent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'LOCALIZED_TEXT'|'PLAIN_TEXT'|'URL' $type
 * @property string $displayText
 * @property array<'de_DE'|'en_CA'|'en_US'|'en_UK'|'es_ES'|'fr_CA'|'fr_FR'|'id_ID'|'it_IT'|'ja_JP'|'ko_KR'|'pt_BR'|'tr_TR'|'zh_CN'|'zh_TW', string> $textByLocale
 * @property string $url
 */
class TextPartValue extends Shape
{
    /**
     * @param array{
     *     type: 'LOCALIZED_TEXT'|'PLAIN_TEXT'|'URL',
     *     displayText?: string,
     *     textByLocale?: array<'de_DE'|'en_CA'|'en_US'|'en_UK'|'es_ES'|'fr_CA'|'fr_FR'|'id_ID'|'it_IT'|'ja_JP'|'ko_KR'|'pt_BR'|'tr_TR'|'zh_CN'|'zh_TW', string>,
     *     url?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
