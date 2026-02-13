<?php

namespace Sunaoka\Aws\Structures\Connect\CreateNotification;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property \Aws\Api\DateTimeResult|null $ExpiresAt
 * @property list<string> $Recipients
 * @property 'HIGH'|'LOW'|null $Priority
 * @property array<'en_US'|'de_DE'|'es_ES'|'fr_FR'|'id_ID'|'it_IT'|'ja_JP'|'ko_KR'|'pt_BR'|'zh_CN'|'zh_TW', string> $Content
 * @property array<string, string>|null $Tags
 * @property string|null $PredefinedNotificationId
 * @property string|null $ClientToken
 */
class CreateNotificationRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     ExpiresAt?: \Aws\Api\DateTimeResult|null,
     *     Recipients: list<string>,
     *     Priority?: 'HIGH'|'LOW'|null,
     *     Content: array<'en_US'|'de_DE'|'es_ES'|'fr_FR'|'id_ID'|'it_IT'|'ja_JP'|'ko_KR'|'pt_BR'|'zh_CN'|'zh_TW', string>,
     *     Tags?: array<string, string>|null,
     *     PredefinedNotificationId?: string|null,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
