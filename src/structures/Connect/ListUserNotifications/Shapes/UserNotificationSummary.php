<?php

namespace Sunaoka\Aws\Structures\Connect\ListUserNotifications\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $NotificationId
 * @property 'READ'|'UNREAD'|'HIDDEN'|null $NotificationStatus
 * @property string|null $InstanceId
 * @property string|null $RecipientId
 * @property array<'en_US'|'de_DE'|'es_ES'|'fr_FR'|'id_ID'|'it_IT'|'ja_JP'|'ko_KR'|'pt_BR'|'zh_CN'|'zh_TW', string>|null $Content
 * @property 'URGENT'|'HIGH'|'LOW'|null $Priority
 * @property 'CUSTOMER'|'RULES'|'SYSTEM'|null $Source
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property \Aws\Api\DateTimeResult|null $ExpiresAt
 */
class UserNotificationSummary extends Shape
{
    /**
     * @param array{
     *     NotificationId?: string|null,
     *     NotificationStatus?: 'READ'|'UNREAD'|'HIDDEN'|null,
     *     InstanceId?: string|null,
     *     RecipientId?: string|null,
     *     Content?: array<'en_US'|'de_DE'|'es_ES'|'fr_FR'|'id_ID'|'it_IT'|'ja_JP'|'ko_KR'|'pt_BR'|'zh_CN'|'zh_TW', string>|null,
     *     Priority?: 'URGENT'|'HIGH'|'LOW'|null,
     *     Source?: 'CUSTOMER'|'RULES'|'SYSTEM'|null,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     ExpiresAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
