<?php

namespace Sunaoka\Aws\Structures\Notifications\GetNotificationEvent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 * @property 'de_DE'|'en_CA'|'en_US'|'en_UK'|'es_ES'|'fr_CA'|'fr_FR'|'id_ID'|'it_IT'|'ja_JP'|'ko_KR'|'pt_BR'|'tr_TR'|'zh_CN'|'zh_TW' $locale
 */
class GetNotificationEventRequest extends Request
{
    /**
     * @param array{
     *     arn: string,
     *     locale?: 'de_DE'|'en_CA'|'en_US'|'en_UK'|'es_ES'|'fr_CA'|'fr_FR'|'id_ID'|'it_IT'|'ja_JP'|'ko_KR'|'pt_BR'|'tr_TR'|'zh_CN'|'zh_TW'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
