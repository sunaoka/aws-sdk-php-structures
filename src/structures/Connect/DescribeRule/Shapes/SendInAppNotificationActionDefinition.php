<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<'en_US'|'de_DE'|'es_ES'|'fr_FR'|'id_ID'|'it_IT'|'ja_JP'|'ko_KR'|'pt_BR'|'zh_CN'|'zh_TW', string> $Content
 * @property NotificationRecipientType $Recipient
 * @property NotificationRecipientType|null $Exclusion
 * @property 'HIGH'|'LOW'|null $Priority
 */
class SendInAppNotificationActionDefinition extends Shape
{
    /**
     * @param array{
     *     Content: array<'en_US'|'de_DE'|'es_ES'|'fr_FR'|'id_ID'|'it_IT'|'ja_JP'|'ko_KR'|'pt_BR'|'zh_CN'|'zh_TW', string>,
     *     Recipient: NotificationRecipientType,
     *     Exclusion?: NotificationRecipientType|null,
     *     Priority?: 'HIGH'|'LOW'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
