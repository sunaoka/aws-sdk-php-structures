<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateNotificationContent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $NotificationId
 * @property array<'en_US'|'de_DE'|'es_ES'|'fr_FR'|'id_ID'|'it_IT'|'ja_JP'|'ko_KR'|'pt_BR'|'zh_CN'|'zh_TW', string> $Content
 */
class UpdateNotificationContentRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     NotificationId: string,
     *     Content: array<'en_US'|'de_DE'|'es_ES'|'fr_FR'|'id_ID'|'it_IT'|'ja_JP'|'ko_KR'|'pt_BR'|'zh_CN'|'zh_TW', string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
